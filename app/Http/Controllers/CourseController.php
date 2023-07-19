<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseTranslation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;


class CourseController extends Controller
{

    public function index(){

        $course = Course::with('translations')->get();
        return view('course.index', compact('course'));
    }

    public function show(Course $course){

        return view('course.show', compact('course'));
    }

    public function create()
    {


        return view('course.create');

    }

    public function student(Request $request)
    {
        if(Auth::user()->role == 'teacher'){
            $students = User::where('role', 'student')->get();
            return view('course.student', compact('students'));
        }
    }


    public function store(Request $request)
    {
        if (Auth::user()->role == 'teacher' ){

            $request->validate([
           'title' => 'required',
           'text' => 'required',
           'description' => 'required',

        ]);



        $course = new Course;
        $course->teacher_id = auth()->id();

        foreach (\LaravelLocalization::getSupportedLocales() as $locale => $translations) {
            if(isset($request->title[$locale]) && isset($request->text[$locale]) && isset($request->description[$locale])) {
                $course->translateOrNew($locale)->title = $request->title[$locale];
                $course->translateOrNew($locale)->text = $request->text[$locale];
                $course->translateOrNew($locale)->description = $request->description[$locale];
            }
        }


        $course->save();

        return redirect()->route('home');
    }}


    public function edit(Course $course)
   {
            return view('course.edit', compact('course'));
   }

   public function update(Request $request, Course $course)
   {
      foreach (\LaravelLocalization::getSupportedLocales() as $locale => $translations) {
          if(isset($request->title[$locale]) && isset($request->text[$locale]) && isset($request->description[$locale])) {
              $course->translateOrNew($locale)->title = $request->title[$locale];
              $course->translateOrNew($locale)->text = $request->text[$locale];
              $course->translateOrNew($locale)->description = $request->description[$locale];
          }
      }

      $course->save();



      if(isset($request->title['en']) && isset($request->text['en']) && isset($request->description['en'])) {
          $course->update([
              'course_title' => $request->title['en'],
              'course_text' => $request->text['en'],
              'course_description' => $request->description['en']
          ]);
      }

      if(isset($request->title['tr']) && isset($request->text['tr']) && isset($request->description['tr'])) {
          $course->update([
              'course_title' => $request->title['tr'],
              'course_text' => $request->text['tr'],
              'course_description' => $request->description['tr']
          ]);
      }

      if(isset($request->title['ar']) && isset($request->text['ar']) && isset($request->description['ar'])) {
        $course->update([
            'course_title' => $request->title['ar'],
            'course_text' => $request->text['ar'],
            'course_description' => $request->description['ar']
        ]);
    }


      return redirect()->route('home', $course);
   }




    public function destroy(Course $course){
    $course->delete();
    return redirect()->route('manage');

 }

 public function viewCart(){
    $cart = Cart::where('user_id', auth()->id())->with('course.translations')->get();
    return view('cart.indexCart', compact('cart'));
}

    public function addcart(Request $request, Course $course) {
        $existingCart = Cart::where('user_id', auth()->id())
        ->where('course_id', $course->id)
        ->first();

        if ($existingCart) {
            return redirect()->route('viewCart');
        }

     $course = Course::find($course->id);
     $cart = new Cart();
     $cart->user_id = auth()->id();
     $cart->course_id = $course->id;

     $cart->save();

     return redirect()->route('viewCart');

}
   public function destroycart(Cart $cart){
    $cart->delete();
    return redirect('/addcart');
}

  public function CourseCartShow(Cart $cart){
    return view('cart.showCart', compact('cart'));
}


public function manage(){
    return view('course.manage', ['course' =>auth()->user()->course()->get()]);

}
}
