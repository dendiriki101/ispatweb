<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $user = auth()->user(); // Mengambil pengguna saat ini

            $requestedSlugs = [];


            if (Gate::allows('superuser')) {
                $requestedSlugs = ['COMPANYPROFILE', 'COMPANYBOARDOFDIRECTORS',
                'COMPANYVISION,MISSION&VALUES','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'
                ,'COMPANYKANCERTIFICATION','COMPANYJISCERTIFICATION','COMPANYSNICERTIFICATION',
                'COMPANYSIRIMCERTIFICATION','COMPANYISOCERTIFICATION','COMPANYTKDNCERTIFICATION',
                'COMPANYGROUPVIDEO','COMPANYMANAGEMENTSYSTEM','INDUSTRIALPROCESSFACILITAS',
                'INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING','INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING',
                'INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS','INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS',
                'INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS','SUBSIDIARIESPT.ISPATWIREPRODUCT',
                'SUBSIDIARIESPT.ISPATPANCAPUTRA','SUBSIDIARIESPT.ISPATBUKITBAJA',
                'BROCHUREPT.ISPATINDO','BROCHUREPT.ISPATWIREPRODUCT','BROCHUREPT.ISPATPANCAPUTRA',
                'BROCHUREPT.ISPATBUKITBAJA','ENVIRONMENT', 'COMPANYSHE','CAREERS','PRODUCTHIGHCARBONSTEEL', 'PRODUCTLOWCARBONSTEEL','PRODUCTCOLDHEADINGQUALITYSTEEL',
                'PRODUCTGENERALPURPOSEWR','PRODUCTWELDINGELECTRODE','PRODUCTPLAINDEFORMBAR','PRODUCTGENERALSTRUCTURE',
                'PRODUCTNAILS&NAILWIRE','PRODUCTSCRAPPROVIDER'];
            } elseif (Gate::allows('admin')) {
                $requestedSlugs = ['COMPANYPROFILE', 'COMPANYBOARDOFDIRECTORS',
                'COMPANYVISION,MISSION&VALUES','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'
                ,'COMPANYKANCERTIFICATION','COMPANYJISCERTIFICATION','COMPANYSNICERTIFICATION',
                'COMPANYSIRIMCERTIFICATION','COMPANYISOCERTIFICATION','COMPANYTKDNCERTIFICATION',
                'COMPANYGROUPVIDEO','COMPANYMANAGEMENTSYSTEM','INDUSTRIALPROCESSFACILITAS',
                'INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING','INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING',
                'INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS','INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS',
                'INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS','SUBSIDIARIESPT.ISPATWIREPRODUCT',
                'SUBSIDIARIESPT.ISPATPANCAPUTRA','SUBSIDIARIESPT.ISPATBUKITBAJA',
                'BROCHUREPT.ISPATINDO','BROCHUREPT.ISPATWIREPRODUCT','BROCHUREPT.ISPATPANCAPUTRA',
                'BROCHUREPT.ISPATBUKITBAJA'];
            } elseif (Gate::allows('she')) {
                $requestedSlugs = ['ENVIRONMENT', 'COMPANYSHE'];
            } elseif (Gate::allows('personalia')) {
                $requestedSlugs = ['CAREERS'];
            } elseif (Gate::allows('qualitycontrol')) {
                $requestedSlugs = ['PRODUCTHIGHCARBONSTEEL', 'PRODUCTLOWCARBONSTEEL','PRODUCTCOLDHEADINGQUALITYSTEEL',
                'PRODUCTGENERALPURPOSEWR','PRODUCTWELDINGELECTRODE','PRODUCTPLAINDEFORMBAR','PRODUCTGENERALSTRUCTURE',
                'PRODUCTNAILS&NAILWIRE','PRODUCTSCRAPPROVIDER'];
            } else {
                return redirect('/admin/news');
            }

            // Mengambil data English yang sesuai dengan slug dan name pengguna saat ini
            $posts = Post::whereIn('slug', $requestedSlugs)
                ->latest()
                ->paginate(7);

            return view('admin.layout.postindo.admin', [
                'title' => 'My Posts In indonesia',
                'posts' => $posts,
                'user' => $user->name
            ]);
        }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.postindo.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules=[
            'title' => ['required'],
            'slug' => ['required','unique:posts'],
            'content' => ['required']
            ];

        $this->validate($request,$rules);
        $content = $request->content;

        $dom = new DOMDocument();
        @$dom->loadHTML($content,9);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $key => $img){
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/uplade/" . time(). $key. '.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
            $existingClass = $img->getAttribute('class');
            $img->setAttribute('class', $existingClass . ' img-fluid');
        }

        $content = $dom->saveHTML();



        Post::create([
            'title' => $request->title,
            'name' => auth()->user()->name,
            'slug' => $request->slug,
            'content' => $content
        ]);



     return redirect('/admin/posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return View ('admin.layout.postindo.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        Return view('admin.layout.postindo.edit',[
           'post' => $post,
           'content' => $post->content
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => ['required'],
            'slug' => ['required'],
            'content' => ['required'],
        ];

        $this->validate($request, $rules);

        $content = $request->content;

        $dom = new DOMDocument();
        @$dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            // Check apakah gambar berasal dari data URI (base64)
            if (strpos($img->getAttribute('src'), 'data:image/png') === 0) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = "/uplade/" . time() . $key . '.png';
                file_put_contents(public_path() . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);

                // Menambahkan kelas "img-fluid"
                $existingClass = $img->getAttribute('class');
                $img->setAttribute('class', $existingClass . ' img-fluid');
            }
        }

        $content = $dom->saveHTML();

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'name' => auth()->user()->name,
            'slug' => $request->slug,
            'content' => $content,
        ]);

        return redirect('/admin/posts');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($post->content,9);
        $images = $dom->getElementsByTagName('img');

        foreach($images as $key => $img){
            $path = $img->getAttribute('src');
            $path = Str::of($path)->after('/');

            if(File::exists($path)){
                File::delete($path);
            }
        }

        Post::destroy($post->id);
        return redirect('/admin/posts')->with('success',' Post has been deleted');
    }
}
