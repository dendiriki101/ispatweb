<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Grade;
use App\Models\Customer;
use App\Models\News;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Certificate;
use App\Models\Career;


class LayoutIndoController extends Controller
{

    public function customer_indo() {
        return view('layout.customercenter.index_indo',[
            'grades' => Grade::all(),
            'url'  => 'customer-center',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);

    }

    public function postcustomer_indo(Request $request) {
        $validatedData = $request->validate([
            'option' => ['required','max:255'],
            'name' => ['max:255'],
            'company' => ['max:255'],
            'email' => ['max:255'],
            'about' => ['max:255'],
            'telphone' => ['max:255'],
            'country' => ['max:255'],
            'location' => ['max:255'],
            'grade1' => ['max:255'],
            'grade2' => ['max:255'],
            'grade3' => ['max:255'],
            'size' => ['max:255'],
            'end' => ['max:255'],
            'issue' => ['max:255'],
            'massage' => ['min:3'],
        ]);

        $data = Customer::create($validatedData);

        Mail::to('dendirikirahmawan@gmail.com')->cc(['dendi.riki@mittalsteel.com'])->send(new SendEmail($data));
        return redirect('home_indo');
    }

    // marketing.indo@mittalsteel.com

    public function bod_indo(){

        $isexist = Post::select("*")
        ->where("slug","COMPANYBOARDOFDIRECTORS")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYBOARDOFDIRECTORS'),
            'url' => 'bod',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'bod',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function profilindo_indo() {

        $isexist = Post::select("*")
        ->where("slug","COMPANYPROFILE")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYPROFILE'),
            'url' => 'profilindo',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'profilindo',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function vision_indo(){
        $isexist = Post::select("*")
        ->where("slug","COMPANYVISION,MISSION&VALUES")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYVISION,MISSION&VALUES'),
            'url' => 'vision',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'vision',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function highlight_indo(){
        $isexist = Post::select("*")
        ->where("slug","COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'),
            'url' => 'highlight',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'highlight',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function milestone_indo(){

        $isexist = Post::select("*")
        ->where("slug","COMPANYMANAGEMENTSYSTEM")->exists();

        if($isexist){
             return View('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYMANAGEMENTSYSTEM'),
            'url'  => 'milestone',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'milestone',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function she_indo(){

        $isexist = Post::select("*")
        ->where("slug","COMPANYSHE")->exists();

        if($isexist){
             return View('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYSHE'),
            'url'  => 'she',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'she',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    Public function isocertification_indo(){
        $certificates = Certificate::where('type', 'ISO')->get();
        return view('layout.company.isocertification_indo',[
                'url'  => 'isocertification',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
                'certificates' => $certificates
        ]);
    }

    public function jisapproval_indo(){
        $certificates = Certificate::where('type', 'JIS')->get();
        return view('layout.company.jisapproval_indo',[
                'url'  => 'jisapproval',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
                'certificates' => $certificates
        ]);
    }

    public function sni_indo(){
        $certificates = Certificate::where('type', 'SNI')->get();
        return view('layout.company.sni_indo',[
            'url'  => 'sni',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
            'certificates' => $certificates
        ]);
    }

    public function kan_indo(){
        $certificates = Certificate::where('type', 'KAN')->get();
        return view('layout.company.kan_indo',[
            'url'  => 'kan',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
            'certificates' => $certificates
        ]);
    }

    public function tkdn_indo(){
        $certificates = Certificate::where('type', 'ZEROACCIDENT')->get();
        return view('layout.company.tkdn_indo',[
            'url'  => 'tkdn',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
            'certificates' => $certificates
        ]);
    }

    public function sirim_indo(){
        $certificates = Certificate::where('type', 'SIRIM')->get();
        return view('layout.company.sirim_indo',[
            'url'  => 'sirim',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
            'certificates' => $certificates
        ]);
    }

    public function highcarbon_indo()
    {
        $isexist = Post::select("*")
            ->where("slug", "PRODUCTHIGHCARBONSTEEL")
            ->exists();

        if ($isexist) {
            $post = Post::firstWhere('slug', 'PRODUCTHIGHCARBONSTEEL');
            $grade = Grade::where('category', 'HIGHCARBON')->get();

            return view('layout.product.highcarbon_indo', [
                'post' => $post,
                'grade' => $grade,
                'url' => 'highcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'ID',
            ]);
        } else {
            return view('layout.notfound.index_indo', [
                'url' => 'highcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function lowcarbon_indo()
    {
        $isexist = Post::select("*")
            ->where("slug", "PRODUCTLOWCARBONSTEEL")
            ->exists();

        if ($isexist) {
            $post = Post::firstWhere('slug', 'PRODUCTLOWCARBONSTEEL');
            $grade = Grade::where('category', 'LOWCARBON')->get();

            return view('layout.product.lowcarbon_indo', [
                'post' => $post,
                'grade' => $grade,
                'url' => 'lowcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'ID',
            ]);
        } else {
            return view('layout.notfound.index_indo', [
                'url' => 'lowcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function clodheading_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTCOLDHEADINGQUALITYSTEEL")->exists();

        if($isexist){
             return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTCOLDHEADINGQUALITYSTEEL'),
            'url' => 'clodheading',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'clodheading',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function generalpw_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTGENERALPURPOSEWR")->exists();

        if($isexist){
             return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTGENERALPURPOSEWR'),
            'url' => 'generalpw',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'generalpw',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function welding_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTWELDINGELECTRODE")->exists();

        if($isexist){
             return View('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTWELDINGELECTRODE'),
            'url'  => 'welding',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'welding',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function pline_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTPLAINDEFORMBAR")->exists();

        if($isexist){
             return View('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTPLAINDEFORMBAR'),
            'url'  => 'pline',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'pline',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function structure_indo(){

        $isexist = Post::select("*")
        ->where("slug","PRODUCTGENERALSTRUCTURE")->exists();

        if($isexist){
             return View('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTGENERALSTRUCTURE'),
            'url'  => 'structure',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'structure',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function nails_indo(){

        $isexist = Post::select("*")
        ->where("slug","PRODUCTNAILS&NAILWIRE")->exists();

        if($isexist){
             return View('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTNAILS&NAILWIRE'),
            'url'  => 'nails',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'nails',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function ispatwireproduct_indo(){

        $isexist = Post::select("*")
        ->where("slug","SUBSIDIARIESPT.ISPATWIREPRODUCT")->exists();

        if($isexist){
             return View('layout.subsidiaries.index_indo',[
            'post' => Post::firstWhere('slug','=','SUBSIDIARIESPT.ISPATWIREPRODUCT'),
            'url'  => 'ispatwireproduct',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'ispatwireproduct',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function ispatpancaputra_indo(){

        $isexist = Post::select("*")
        ->where("slug","SUBSIDIARIESPT.ISPATPANCAPUTRA")->exists();

        if($isexist){
             return View('layout.subsidiaries.index_indo',[
            'post' => Post::firstWhere('slug','=','SUBSIDIARIESPT.ISPATPANCAPUTRA'),
            'url'  => 'ispatpancaputra',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'ispatpancaputra',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function ispatbukitbaja_indo(){
        $isexist = Post::select("*")
        ->where("slug","SUBSIDIARIESPT.ISPATBUKITBAJA")->exists();

        if($isexist){
             return View('layout.subsidiaries.index_indo',[
            'post' => Post::firstWhere('slug','=','SUBSIDIARIESPT.ISPATBUKITBAJA'),
            'url'  => 'ispatbukitbaja',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'ispatbukitbaja',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }

    }

    public function fasilitas_indo(){
        $isexist = Post::select("*")
        ->where("slug","INDUSTRIALPROCESSFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index_indo',[
            'post' => Post::firstWhere('slug','=','INDUSTRIALPROCESSFACILITAS'),
            'url'  => 'fasilitas',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'fasilitas',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function steelmaking_indo() {
        $isexist = Post::select("*")
        ->where("slug","INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING")->exists();

        if($isexist){
             return View('layout.industrila.index_indo',[
            'post' => Post::firstWhere('slug','=','INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING'),
            'url'  => 'steelmaking',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'steelmaking',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function rolling_indo(){
        $isexist = Post::select("*")
        ->where("slug","INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING")->exists();

        if($isexist){
             return View('layout.industrila.index_indo',[
            'post' => Post::firstWhere('slug','=','INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING'),
            'url'  => 'rolling',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'rolling',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }

    }

    public function fasilitaspancaputra_indo(){
        $isexist = Post::select("*")
        ->where("slug","INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index_indo',[
            'post' => Post::firstWhere('slug','=','INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS'),
            'url'  => 'fasilitaspancaputra',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'fasilitaspancaputra',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function fasilitasbukitnaja_indo(){
        $isexist = Post::select("*")
        ->where("slug","INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index_indo',[
            'post' => Post::firstWhere('slug','=','INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS'),
            'url'  => 'fasilitasbukitnaja',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'fasilitasbukitnaja',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }


    public function fasilitaswire_indo(){
        $isexist = Post::select("*")
        ->where("slug","INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index_indo',[
            'post' => Post::firstWhere('slug','=','INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS'),
            'url'  => 'fasilitaswire',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'fasilitaswire',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function karir_indo(){
        $isexist = Post::select("*")
        ->where("slug","CAREERS")->exists();

        if($isexist){
             return View('layout.karir.index_indo',[
            'post' => Post::firstWhere('slug','=','CAREERS'),
            'url'  => 'karir',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url'  => 'karir',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'ID',
            ]);
        }
    }

    public function news_indo(){
        return view('layout.news.index_indo',[
            'news' => News::all(),
            'url'  => 'news',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
        ]);

    }

    public function detailnews_indo(News $news) {
        return view('layout.news.detail_indo',[
            'news' =>$news,
            'url'  => 'detailnews',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',

        ]);
    }

    public function detailproduk_indo(Grade $grade) {
        return view('layout.product.detailproduk_indo',[
            'grade' =>$grade,
            'url'  => 'detailproduk',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',

        ]);

    }


    public function applyjob_indo(Career $career){

        $job = Career::all();

        return view ('layout.karir.applyjob_indo',[
            'url'  => 'applyjob',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'ID',
            'jobs' => $job
        ]);
    }




























}
