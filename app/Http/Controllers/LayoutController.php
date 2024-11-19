<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Grade;
use App\Mail\SendEmail;
use App\Models\English;
use App\Models\news;
use App\Models\Certificate;
use App\Models\Career;

class LayoutController extends Controller
{
    public function customer() {
        return view('layout.customercenter.index',[
            'grades' => Grade::all(),
            'url'  => 'customer-center',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);

    }

    public function postcustomer(Request $request) {
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
        return redirect('home');
    }

    // marketing.indo@mittalsteel.com

    public function bod(){

        $isexist = English::select("*")
        ->where("slug","COMPANYBOARDOFDIRECTORS")->exists();

        if($isexist){
             return View('layout.company.index',[
            'english' => English::firstWhere('slug','=','COMPANYBOARDOFDIRECTORS'),
            'url'  => 'bod',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',

        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'bod',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',

            ]);
        }
    }

    public function profilindo() {

        $isexist = English::select("*")
        ->where("slug","COMPANYPROFILE")->exists();

        if($isexist){
             return View('layout.company.index',[
            'english' => English::firstWhere('slug','=','COMPANYPROFILE'),
            'url'  => 'profilindo',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'profilindo',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function vision(){

        $isexist = English::select("*")
        ->where("slug","COMPANYVISION,MISSION&VALUES")->exists();

        if($isexist){
             return View('layout.company.index',[
            'english' => English::firstWhere('slug','=','COMPANYVISION,MISSION&VALUES'),
            'url'  => 'vision',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'vision',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function highlight(){

        $isexist = English::select("*")
        ->where("slug","COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'),
            'url'  => 'highlight',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'highlight',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function milestone(){

        $isexist = English::select("*")
        ->where("slug","COMPANYMANAGEMENTSYSTEM")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','COMPANYMANAGEMENTSYSTEM'),
            'url'  => 'milestone',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'milestone',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function she(){

        $isexist = English::select("*")
        ->where("slug","COMPANYSHE")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','COMPANYSHE'),
            'url'  => 'she',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'she',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    Public function isocertification(){
        $certificates = Certificate::where('type', 'ISO')->get();
        return view('layout.company.isocertification',[
                'url'  => 'isocertification',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
                'certificates' => $certificates
        ]);
    }

    public function jisapproval(){
        $certificates = Certificate::where('type', 'JIS')->get();
        return view('layout.company.jisapproval',[
                'url'  => 'jisapproval',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
                'certificates' => $certificates
        ]);
    }

    public function sni(){
        $certificates = Certificate::where('type', 'SNI')->get();
        return view('layout.company.sni',[
            'url'  => 'sni',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
            'certificates' => $certificates
        ]);
    }

    public function kan(){
        $certificates = Certificate::where('type', 'KAN')->get();
        return view('layout.company.kan',[
            'url'  => 'kan',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
            'certificates' => $certificates
        ]);
    }

    public function tkdn(){
        $certificates = Certificate::where('type', 'ZEROACCIDENT')->get();
        return view('layout.company.tkdn',[
            'url'  => 'tkdn',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
            'certificates' => $certificates
        ]);
    }

    public function sirim(){

        $certificates = Certificate::where('type', 'SIRIM')->get();

        return view('layout.company.sirim',[
            'url'  => 'sirim',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
            'certificates' => $certificates
        ]);
    }

    public function highcarbon()
    {
        $isexist = English::select("*")
            ->where("slug", "PRODUCTHIGHCARBONSTEEL")
            ->exists();

        if ($isexist) {
            $english = English::firstWhere('slug', 'PRODUCTHIGHCARBONSTEEL');
            $grade = Grade::where('category', 'HIGHCARBON')->get();

            return view('layout.product.highcarbon', [
                'english' => $english,
                'grade' => $grade,
                'url' => 'highcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'EN',
            ]);
        } else {
            return view('layout.notfound.index_indo', [
                'url' => 'highcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function lowcarbon()
    {
        $isexist = English::select("*")
            ->where("slug", "PRODUCTLOWCARBONSTEEL")
            ->exists();

        if ($isexist) {
            $english = English::firstWhere('slug', 'PRODUCTLOWCARBONSTEEL');
            $grade = Grade::where('category', 'LOWCARBON')->get();

            return view('layout.product.lowcarbon', [
                'english' => $english,
                'grade' => $grade,
                'url' => 'lowcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'EN',
            ]);
        } else {
            return view('layout.notfound.index', [
                'url' => 'lowcarbon',
                'class' => 'sub_page',
                'navbar' => 'timpanav',
                'sub' => 'EN',
            ]);
        }
    }


    public function clodheading(){

        $isexist = English::select("*")
        ->where("slug","PRODUCTCOLDHEADINGQUALITYSTEEL")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','PRODUCTCOLDHEADINGQUALITYSTEEL'),
            'url'  => 'clodheading',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'clodheading',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function generalpw(){

        $isexist = English::select("*")
        ->where("slug","PRODUCTGENERALPURPOSEWR")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','PRODUCTGENERALPURPOSEWR'),
            'url'  => 'generalpw',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'generalpw',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function welding(){
        $isexist = English::select("*")
        ->where("slug","PRODUCTWELDINGELECTRODE")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','PRODUCTWELDINGELECTRODE'),
            'url'  => 'welding',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'welding',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function pline(){
        $isexist = English::select("*")
        ->where("slug","PRODUCTPLAINDEFORMBAR")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','PRODUCTPLAINDEFORMBAR'),
            'url'  => 'pline',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'pline',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function structure(){

        $isexist = English::select("*")
        ->where("slug","PRODUCTGENERALSTRUCTURE")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','PRODUCTGENERALSTRUCTURE'),
            'url'  => 'structure',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'structure',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function nails(){

        $isexist = English::select("*")
        ->where("slug","PRODUCTNAILS&NAILWIRE")->exists();

        if($isexist){
             return View('layout.product.index',[
            'english' => English::firstWhere('slug','=','PRODUCTNAILS&NAILWIRE'),
            'url'  => 'nails',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'nails',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function ispatwireproduct(){

        $isexist = English::select("*")
        ->where("slug","SUBSIDIARIESPT.ISPATWIREPRODUCT")->exists();

        if($isexist){
             return View('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','=','SUBSIDIARIESPT.ISPATWIREPRODUCT'),
            'url'  => 'ispatwireproduct',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'ispatwireproduct',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function ispatpancaputra(){

        $isexist = English::select("*")
        ->where("slug","SUBSIDIARIESPT.ISPATPANCAPUTRA")->exists();

        if($isexist){
             return View('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','=','SUBSIDIARIESPT.ISPATPANCAPUTRA'),
            'url'  => 'ispatpancaputra',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'ispatpancaputra',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function ispatbukitbaja(){
        $isexist = English::select("*")
        ->where("slug","SUBSIDIARIESPT.ISPATBUKITBAJA")->exists();

        if($isexist){
             return View('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','=','SUBSIDIARIESPT.ISPATBUKITBAJA'),
            'url'  => 'ispatbukitbaja',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'ispatbukitbaja',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }

    }


    public function fasilitas(){
        $isexist = English::select("*")
        ->where("slug","INDUSTRIALPROCESSFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index',[
            'english' => English::firstWhere('slug','=','INDUSTRIALPROCESSFACILITAS'),
            'url'  => 'fasilitas',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'fasilitas',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function steelmaking() {
        $isexist = English::select("*")
        ->where("slug","INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING")->exists();

        if($isexist){
             return View('layout.industrila.index',[
            'english' => English::firstWhere('slug','=','INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING'),
            'url'  => 'steelmaking',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'steelmaking',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function rolling(){
        $isexist = English::select("*")
        ->where("slug","INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING")->exists();

        if($isexist){
             return View('layout.industrila.index',[
            'english' => English::firstWhere('slug','=','INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING'),
            'url'  => 'rolling',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'rolling',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }

    }

    public function fasilitaspancaputra(){
        $isexist = English::select("*")
        ->where("slug","INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index',[
            'english' => English::firstWhere('slug','=','INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS'),
            'url'  => 'fasilitaspancaputra',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'fasilitaspancaputra',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function fasilitasbukitnaja(){
        $isexist = English::select("*")
        ->where("slug","INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index',[
            'english' => English::firstWhere('slug','=','INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS'),
            'url'  => 'fasilitasbukitnaja',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'fasilitasbukitnaja',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function fasilitaswire(){
        $isexist = English::select("*")
        ->where("slug","INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS")->exists();

        if($isexist){
             return View('layout.industrila.index',[
            'english' => English::firstWhere('slug','=','INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS'),
            'url'  => 'fasilitaswire',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'fasilitaswire',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function karir(){
        $isexist = English::select("*")
        ->where("slug","CAREERS")->exists();

        if($isexist){
             return View('layout.karir.index',[
            'english' => English::firstWhere('slug','=','CAREERS'),
            'url'  => 'karir',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
        }else{
            return view('layout.notfound.index',[
                'url'  => 'karir',
                'class' => 'sub_page',
                'navbar' =>'timpanav',
                'sub' => 'EN',
            ]);
        }
    }

    public function news(){
        return view('layout.news.index',[
            'news' => News::all(),
            'url'  => 'news',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);

    }

    public function detailnews(News $news) {
        $url = 'detailnews'; // Nilai dari URL

        return view('layout.news.detail', [
            'news' => $news,
            'url' => $url,
            'class' => 'sub_page',
            'navbar' => 'timpanav',
            'sub' => 'EN',
        ]);
    }


    public function detailproduk(Grade $grade) {
        return view('layout.product.detailproduk',[
            'grade' =>$grade,
            'url'  => 'detailproduk',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',

        ]);

    }

    public function applyjob(Career $career){

        $job = Career::all();

        $isexist = Career::select("*")
        ->where("status","available")->exists();

        // if($isexist){
        //     $tombol = 'availabe-box';
        //     $icon =  'check';
        // }else{
        //     $tombol = 'unavailabe-box';
        //     $icon =  'xmark';
        // }

        $tombol = "availabe-box";
        $icon =  "check";

        return view ('layout.karir.applyjob',[
            'url'  => 'applyjob',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
            'jobs' => $job,

        ]);
    }

}


