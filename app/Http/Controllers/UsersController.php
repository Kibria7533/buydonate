<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;
use App\States;
use App\City;
use App\MainCategory;
use App\SubCategory;
use App\Advertisement;
use App\User;
use App\Role;
use Redirect,Response;



class UsersController extends Controller
{
        
 

//backend manage users
	 public function authcheck(){
		 	if (Auth::check()) {
		    $id = Auth::id();
		    $role=DB::table('users')->where('id',$id)->pluck('role')->first();
		    return $role;
		         }
		    }
	public function showu(Request $request){
			 $id=$request->id;
			 if($id==0){
			 	$data=DB::table('users')->get();
			 	}
			 else if($id==1){
			 	$data=DB::table('users')->where('role','1')->get();
			 }
			 else if($id==2){
			 	$data=DB::table('users')->where('role','2')->get();
			 }
			 else if($id>=3){
			 	$data=DB::table('users')->where('role','>=','3')->get();
			 }
			 else if($id==4){
			 	$data=DB::table('users')->join('sellers_info','users.email','=','sellers_info.email')->get();
			 }

			    $user='';
					if($data->count()>0){
			         foreach ($data as $row) {
			         	if($id==0){
			         		$deletebuttonid="deletefromall";
			         	}
			         	else if($id==1){
			         		$deletebuttonid="deletefromadmin";
			         	}
			         	else if($id==2){
			         		$deletebuttonid="deletefromseller";
			         	}
			         	else if($id>=3){
			         		$deletebuttonid="deletefromcustomer";
			         	}
			         	if($row->role==2){
			         		$role="Seller";
			         		$button='<button value="'.$row->id.'"id="makeadmin'.$id.'">admin</button><button value="'.$row->id.'"id="makecustomer'.$id.'">customer</button>';
			         	}
			         	else if($row->role==1){
			         		$role="Admin";
			         		$button='<button value="'.$row->id.'"id="makeseller'.$id.'">seller</button><button value="'.$row->id.'"id="makecustomer'.$id.'">customer</button>';
			         	}
			         	else{
			         		$role="Customer";
			         		$button='<button value="'.$row->id.'"id="makeadmin'.$id.'">admin</button><button  value="'.$row->id.'"id="makeseller'.$id.'">seller</button>';
			         	}


			         	$user.='<tr><th>'.$row->name.'</th><td>'.$row->email.'</td><td>'.$row->address.'</td><td>'.$row->phone.'</td><td>'.$role.'</td><td>'.$button.'</td><td><button type="submit" value="'.$row->id.' "id="'.$deletebuttonid.'">delete</button></td>';
			         }
			         $user.='';
			     }

			       return Response::json($user);
			 }



	 public function deleteuser(Request $request){
		 	$id=$request->id;
		 	$email=DB::table('users')->where('id',$id)->pluck('email');
		 	$data=DB::table('users')->where('id',$id)->delete();
		 	$data=DB::table('sellers_info')->where('email',$email)->delete();
		 	return $data;
		    }

     public function makeadmin(Request $request){
		 	$data=DB::table('users')->where('id',$request->id)->update([
		 		'role'=>1
		 	]);
		    }
	 public function makeseller(Request $request){
	 	    $data=DB::table('users')->where('id',$request->id)->update([
	 		'role'=>2
	 	    ]);
	        }
     public function makecustomer(Request $request){
		 	$data=DB::table('users')->where('id',$request->id)->update([
		 		'role'=>3
		 	]);
		    }

//seller request registry check
	public function registrycheck(Request $request){
				$email=$request->email;
				$customer=DB::table('users')->where('email',$email)->pluck('role')->first();
				 $seller=DB::table('sellers_info')->where('email',$email)->pluck('id')->first();

				 if($customer==2 && $seller !='' )
				 {
				 	//already seller..dash  bord a  nia jacci
				 	return 1;

				 }
				 else if($customer>=3 &&  $seller =='' ){
				 	//customer akhn apply  korlen to..then wait koren..ar customer e calan..
				 	return 2;
				 }
				  else if($customer>=3 &&  $seller !='' ){
				 	//apny agei apply korecen..accept kora hoy ni..wait koren  totokn customer hisabe calan..
				 	return 3;
				 }
				 else if($customer =='' &&  $seller =='' ){
				 	//wait pls..totokkhn   apny customer hisabe calan..apni sora sori seller hben   wait  koren..pls
				 	return 4;
				 }

				
			}
      
    public function sellersave(Request $request){
    	     $data=DB::table('sellers_info')->insert([
    		'email'=>$request->email,
			'mobilenumber'=>$request->mobilenumber,
			'pe_address'=>$request->pe_address,
			'pre_address'=>$request->pre_address,
			'po_code'=>$request->po_code,
			'p_name'=>$request->p_name,
			'p_source'=>$request->p_source,
			'p_price'=>$request->p_price,
			'ed_institute'=>$request->ed_institute,
			'ed_level'=>$request->ed_level,
			'CourierPoint'=>$request->CourierPoint,
			'CourierMobileNumber'=>$request->CourierMobileNumber
    	]);
    	return $data;
    }


    public function loggingout(){
 	       Auth::logout();
      }

//state management functionality

     public function addst(Request $request){
		  	$data=DB::table('states')->insert([
		  		'stateName'=>$request->stateName
		  	]);
		  	return Response::json($data);
		  }

	public function readstates(){
			$data=States::with('city')->get();
			$user='';
				if($data->count()>0){
					$user.='<ul>';
		         foreach ($data as $row) {
		         	$user.='<li>'.$row->stateName.'<ul>';
		         	foreach ($row->city as $key) {
		         		$user.='<li>'.$key->cityName.'</li>';
		         	}
		         	$user.='</ul></li>';
		         }
		         $user.='</ul>';
		         $user.='';
		     }

		    return Response::json($user);
		}



      public function stateretrive(Request $request){
		     	$data=DB::table('states')->get();
		     	$output ='';
		    		if($data->count()>0){
		    			foreach($data as $row){
		    				$output .='<option value='.$row->id.'>'.$row->stateName.'</option>';
		    			}
		    			$output .='';
		    			echo $output;
		    		}

				     }

     public function addcity(Request $request)
			     {
			     	$data=DB::table('cities')->insert([
				     		'cityName'=>$request->cityname,
				     		'stateId'=>$request->state
				     	]);

				     	return Response::json($data);
			     }
//category management functionality

	public function addcategory(Request $request){
				$data=DB::table('main_categories')->insert([
					'maincategory'=>$request->name
				]);
			return Response::json($data); 	
			}
    
 

	public function readcategory(){
			$data=MainCategory::with('subcategory')->get();
			$user='';
				if($data->count()>0){
					$user.='<ul>';
		         foreach ($data as $row) {
		         	$user.='<li>'.$row->maincategory.'<ul>';
		         	foreach ($row->subcategory as $key) {
		         		$user.='<li>'.$key->subcategory.'</li>';
		         	}
		         	$user.='</ul></li>';
		         }
		         $user.='</ul>';
		         $user.='';
		     }

		return Response::json($user);
		}

 



       public function categoriesretrieve(){
	     	$data=DB::table('main_categories')->get();
	     	$output ='';
	    		if($data->count()>0){
	    			foreach($data as $row){
	    				$output .='<option value='.$row->id.'>'.$row->maincategory.'</option>';
	    			}
	    			$output .='';
	    			echo $output;
	    		}

		 }

	     public function addsubcategory(Request $request){
			     	$data=DB::table('sub_categories')->insert([
			     		'subcategory'=>$request->subcategory,
			     		'maincategoryid'=>$request->categoryid
			     	]);

			     	return Response::json($data);
			     }

//admin login and redirecting

       public function admindashboard()
	       {
	       	return view('admin.addash');
	       }
        public function adminlogin()
	       {
	       	return view('admin.login');
	       }




//show state on keypress
                      
    public function fetch(Request $request){
		    	if($request->get('indianstates')){
		    		$query=$request->get('indianstates');
		    		$data =DB::table('states')->where('stateName','like','%'.$query.'%')->get();
		    		$output ='<ul style="display:block !important;" class="dropdown-menu">';
		    		if($data->count()>0){
		    			foreach($data as $row){
		    				$output .='<li class="searchState" id="search" name="searchState" style="cursor:pointer;" value='.$row->id.'>'.$row->stateName.'</li>';
		    			}
		    			$output .='</ul>';
		    			echo $output;
		    		}
		    		else{
		    			$output .='<li>Record not found!</li>';
		    			echo $output;
		    		}

		    	}
		    }



		public function cities(Request $request){
						if($request->get('id')){
					$query=$request->get('id');
					$data =DB::table('cities')->where('stateId','like','%'.$query.'%')->get();
					$output ='';
					if($data->count()>0){
						foreach($data as $row){
							$output .='<li class="searchCity" id="searchCity" name="searchCity" style="cursor:pointer;" value='.$row->id.'>'.$row->cityName.'</li>';
						}
						$output .='';
						echo $output;
					}
					else{
						$output .='<li>City not found!</li>';
						echo $output;
					}
					}
				}
	//show category on search bar
     public function retrieve(Request $request){
		     	$data=DB::table('main_categories')->get();
		     	$output ='';
		    		if($data->count()>0){
		    			foreach($data as $row){
		    				$output .='<option value='.$row->id.'>'.$row->maincategory.'</option>';
		    			}
		    			$output .='';
		    			echo $output;
		    		}

		     }
				    
				
//post add page view
	 public function postad(){
				 	$categories=DB::table('main_categories')
				    	->select('main_categories.id','main_categories.maincategory','icons.icons')
				    	->join('icons','icons.id','=','main_categories.id')
				    	->get();
				    	return view('users.postad',['categories'=>$categories]);
				 }



//select categories to post add --post add  form a ar sellec
	public function categories(Request $request,$maincategory,$id){
			
				$categories=DB::table('main_categories')
					    	->select('main_categories.id','main_categories.maincategory','icons.icons')
					    	->join('icons','icons.id','=','main_categories.id')
					    	->get();
					    	$subcategories=DB::table('main_categories')
					    	             ->select('*')
					    	             ->join('sub_categories','sub_categories.maincategoryid','=','main_categories.id')
					    	             ->where(['main_categories.id'=>$id])
					    	             ->get();
					 $states = States::all();
		             return view('users.publishads.carsbikesads',['categories'=>$categories,'subcategories'=>$subcategories,'states'=>$states]);
		         
				
			    }

//post add submit  button

    public function postCarsBikes(Request $request){
            //dd($request->expsellprice);
    	$this->validate($request,[

              'subcategoryid'=>'required',
              'productname'=>'required',
              'yearofpurchase'=>'required',
              'expsellprice'=>'required',
              'name'=>'required',
              'mobile'=>'required',
              'email'=>'required',
              'state'=>'required',
              'city'=>'required',
              'photos'=>'required',
              'photos.*'=>'image|mimes:jpg,png,jpeg,svg|max:2048'
       	]);
    
       
			$ads =new Advertisement;
			$images =$request->file('photos');
			$count = 0;
			if($request->file('photos')){
				foreach($images as $item){
					if($count<4){
						$var =date_create();
						$date=date_format($var,'Ymd');
						$imageName =$date.'-'.$item->getClientOriginalName();
						$item->move(public_path().'/uploads/',$imageName);
						$url =URL::to("/").'/uploads/'.$imageName;
						$arr[]=$url;
						$count++;
					}
				}
				$image =implode(",",$arr);
				$ads->maincategoryid=$request->input('maincategoryid');
				$ads->subcategoryid=$request->input('subcategoryid');
				$ads->productname=$request->input('productname');
				$ads->yearofpurchase=$request->input('yearofpurchase');
				$ads->expsellprice=$request->input('expsellprice');
				$ads->name=$request->input('name');
				$ads->mobile=$request->input('mobile');
				$ads->email=$request->input('email');
				$ads->state=$request->input('state');
				$ads->city=$request->input('city');
				$ads->photos=$image;
				$ads->save();
				return redirect('/')->with('info','Added succesfully');

				
			}


			}

//get all adds
 public function getAds(){
                $ads=DB::table('advertisements')->get();
                $output='';
                if($ads->count()>0){
                	foreach($ads as $row){
                		$output.='<div class="col-md-3">
                		<div>
                		  <img src='.strtok($row->photos ,',').' style="padding:10px !important; width:100%; height:182px;" >
                		  <h3>'.$row->productname.'</h3>
                		  <p>'.$row->expsellprice.'</p>
                		  <p>'.$row->city.'</p>
                		  <button id="showunic" value="'.$row->id.'">VIEW<button>
                		  </div>
                		  </div>'
                		  ;
                	}
                	$output.='';
                	echo $output;
                }
                else{
                	$output.='<p>Not Found!</p>';
                	echo $output;
                }

			}
//get single add view
			public function getsingleadd(Request $request){
				$ads=DB::table('advertisements')->where('id',$request->id)->get();
                $output='';
                if($ads->count()>0){
                	foreach($ads as $row){
                		$output.='
                		  <img src='.strtok($row->photos ,',').' style="padding:5px  !important; width:100%; height:300px;" >
                		  <h1>Product Details</h1>
                		  <h3>Product Name='.$row->productname.'</h3>
                		  <h3>Purchase on='.$row->yearofpurchase.'</h3>
                		  <h3>Product Name='.$row->expsellprice.'</h3>
                		  <h1>Seller Details</h1>
                		  <h3>Seller Name='.$row->name.'</h3>
                		  <h3>Seller mobile No='.$row->mobile.'</h3>
                		  <h3>email='.$row->email.'</h3>
                		  <h3>Seller city='.$row->city.'</h3>

                		  
                		  
                		  
                		  ';
                	}
                	$output.='';
                	echo $output;
                }
                else{
                	$output.='<p>Not Found!</p>';
                	echo $output;
                }

			}

//get categories add
public function ViewAds(Request $request,$maincategory,$id){
				
			$categories=DB::table('main_categories')
				    	->select('main_categories.id','main_categories.maincategory','icons.icons')
				    	->join('icons','icons.id','=','main_categories.id')
				    	->get();
				    	$carsBikes=DB::table('advertisements')
				    	          ->where(['maincategoryid'=>$id])
				    	          ->get();
	     return view('users.categories.carsbikesads',['categories'=>$categories,'carsBikes'=>$carsBikes]);

			}




	public function searchProduct(Request $request){
		if($request->get('searchonproduct')){
			$query = $request->get('searchonproduct');
			$categories=DB::table('main_categories')
							    	->select('main_categories.id','main_categories.maincategory','icons.icons')
							    	->join('icons','icons.id','=','main_categories.id')
							    	->get();

							    	$data =DB::table('advertisements')
							    	->where('productname','like','%'.$query.'%')->get();
                  return view('users.categories.searchonproduct',['categories'=>$categories,'data'=>$data]);

		}

	}



	public function searchAdvertisements(Request $request){
		

		if($request->get('city') && $request->get('categories')){

          $city =$request->get('city');
          $categories =$request->get('categories');
          $data =DB::table('advertisements')
             ->where(['city'=> $city,'maincategoryid'=>$categories])->get();

           $categories=DB::table('main_categories')
							    	->select('main_categories.id','main_categories.maincategory','icons.icons')
							    	->join('icons','icons.id','=','main_categories.id')
							    	->get();  

	return view('users.categories.searchonlocationcategories',['categories'=>$categories,'data'=>$data]);



				}
			}




    public function index(){
	    	$categories=DB::table('main_categories')
	    	->get();
	    	
				    	return view('users.user',['categories'=>$categories]);
				                           }

}	


    


    

