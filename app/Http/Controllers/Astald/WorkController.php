<?php

/**
 * 
 * WorkController
 * 
 * For Special Script
 * Created Work 29.11.2015
 * 
 * Osman YILMAZ - www.astald.com
 */

namespace Astald\Http\Controllers\Astald;

use Illuminate\Http\Request;
use Astald\Http\Requests;  

use Astald\Http\Controllers\AstaldController;
use Astald\Http\Controllers\Controller;

use Astald\Models\Customer;
use Astald\Models\Work; 

use Validator;
use Session; 
use Input; 

class WorkController extends AstaldController
{
    public function getView($id)
    {
        $record = Work::where('id',$id)->first();
        if( count($record)<=0 )
            return redirect(clink('work'));
        return view(vw('theme.work.view'), compact('record'))->withTitle('İş Bilgileri');
    }

    public function getAdd($id)
    {
    	$record = Customer::find($id);
    	if(count($record)<0) return redirect::back();
    	return view(vw('theme.work.add'), compact('record'))->withTitle('İş Ekle');
    }
    public function postAdd()
    {
    	$validator = Validator::make(Input::all(), ['title'=>'required']);
    	if($validator->fails()){  
        	Session::flash('message',['title'=>'Uyarı!','text'=>'Lütfen! İşin adını giriniz ','type'=>'error']);
        	return redirect()->back()->withInput();
        }

		$record = new Work;
		$record->user_id = 1;
		$record->customer_id = gets('customer_id'); 
		$record->title = gets('title');
		$record->price = gets('price');
		$record->amount = gets('amount'); 
		$record->content = gets('content');
		$record->status = 'publish';
		$record->date_start = gets('date_start');
		$record->date_end = gets('date_end');
		$record->save();

		if($record->save()){
            Session::flash('message',['title'=>'Tebrikler!','text'=>'İş kaydı başarıyla eklenmiştir.','type'=>'success']);
            return redirect()->to(clink('customer-view',gets('customer_id')))->withInput();
        }else { 
            Session::flash('message',['title'=>'Hata!','text'=>'İş kaydı eklenemedi! Lütfen tekrar deneyiniz','type'=>'error']);
            return redirect()->back()->withInput(); 
        }  
    }

    public function getEdit($id)
    {
        $record = Work::find($id);
        if( count($record)<=0 )
            return redirect(clink('work'));
    	return view(vw('theme.work.edit'), compact('record'))->withTitle('İş Düzelt');
    }
    public function postEdit($id)
    {
        $validator = Validator::make(Input::all(), ['title'=>'required']);
        if($validator->fails()){  
            Session::flash('message',['title'=>'Uyarı!','text'=>'Lütfen! İşin adını giriniz ','type'=>'error']);
            return redirect()->back()->withInput();
        }
        $record = Work::find($id);
		$record->title = gets('title');
		$record->price = gets('price');
		$record->amount = gets('amount'); 
		$record->content = gets('content');
		$record->status = 'publish';
		$record->date_start = gets('date_start');
		$record->date_end = gets('date_end');
        $record->save();

        if($record->save()){
            Session::flash('message',['title'=>'Tebrikler!','text'=>'İş kaydı başarıyla düzeltildi.','type'=>'success']);
            return redirect()->back()->withInput();
        }else { 
            Session::flash('message',['title'=>'Hata!','text'=>'İş kaydı düzeltilemedi! Lütfen tekrar deneyiniz','type'=>'error']);
            return redirect()->back()->withInput(); 
        }  
    }

    public function getDelete($id, $recovery = '')
    {
        $record = Work::find($id);
        if( count($record)<=0 )
            return redirect(clink('work'));
        if($recovery=='recovery')
        	$record->status = 'publish';
    	else 
        	$record->status = 'trash';
        $record->save();

        if($record->save()){
        	if($recovery=='recovery')
            	Session::flash('message',['title'=>'Tebrikler!','text'=>'İş kaydı başarıyla geri yüklenmiştir.','type'=>'success']);
            else 
            	Session::flash('message',['title'=>'Tebrikler!','text'=>'İş kaydı başarıyla silinmiştir.','type'=>'success']);
            return redirect()->back()->withInput(); 
        }else { 
            Session::flash('message',['title'=>'Hata!','text'=>'İş kaydı silinemedi! Lütfen tekrar deneyiniz','type'=>'error']);
            return redirect()->back()->withInput(); 
        }  
    } 

	public function getTrash()
    { 
        $records = Work::where('status','trash')->get();
        $recordsCount = count($records); 
        return view(vw('theme.work.trash'), compact('records','recordsCount'))->with(array('title'=>'Silinmiş İşler'));
    }   
}