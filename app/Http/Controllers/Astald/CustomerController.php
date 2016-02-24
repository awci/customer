<?php

/**
 * 
 * CustomerController
 * 
 * For Special Script
 * Created Customer 28.11.2015
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

class CustomerController extends AstaldController
{
	public function getIndex()
    { 
        $records = Customer::where('status','publish')->orderBy('fullname')->get();
        $recordsCount = count($records); 
        return view(vw('theme.customer.index'), compact('records','recordsCount'))->with(array('title'=>'Müşteriler','letter'=>'','search'=>false));
    } 

    public function getSearch($letter)
    { 
        $records = Customer::where('first_letter_name', $letter)->where('status','publish')->orderBy('fullname')->get();
        $recordsCount = count($records); 
        return view(vw('theme.customer.index'), compact('records','recordsCount'))->with(array('title'=>'Müşteriler','letter'=>$letter,'search'=>true));
    } 

    public function getView($id)
    {
        $record = Customer::find($id);
        if( count($record)<=0 )
            return redirect(clink('customer'));
        return view(vw('theme.customer.view'), compact('record'))->withTitle('Müşteri Bilgileri');
    }

    public function getAdd()
    {
    	return view(vw('theme.customer.add'))->withTitle('Müşteri Ekle');
    }
    public function postAdd()
    {
    	$validator = Validator::make(Input::all(), ['fullname'=>'required']);
    	if($validator->fails()){  
        	Session::flash('message',['title'=>'Uyarı!','text'=>'Lütfen! Müşteri adını giriniz ','type'=>'error']);
        	return redirect()->back()->withInput();
        }

		$record = new Customer;
		$record->user_id = 1;
		$record->fullname = gets('fullname');
        $record->first_letter_name = $record->fullname[0];
		$record->surname = gets('surname');
		$record->phone = gets('phone');
		$record->email = gets('email');
		$record->near_fullname = gets('near_fullname');
		$record->near_phone = gets('near_phone');
		$record->address = gets('address');
		$record->content = gets('content');
		$record->status = gets('status');
		$record->save();

		if($record->save()){
            Session::flash('message',['title'=>'Tebrikler!','text'=>'Müşteri başarıyla eklenmiştir.','type'=>'success']);
            return redirect()->to(clink('customer-view',$record->id))->withInput();
        }else { 
            Session::flash('message',['title'=>'Hata!','text'=>'Müşteri eklenmedi! Lütfen tekrar deneyiniz','type'=>'error']);
            return redirect()->back()->withInput(); 
        }  
    }

    public function getEdit($id)
    {
        $record = Customer::find($id);
        if( count($record)<=0 )
            return redirect(clink('customer'));
    	return view(vw('theme.customer.edit'), compact('record'))->withTitle('Müşteri Düzelt');
    }
    public function postEdit($id)
    {
        $validator = Validator::make(Input::all(), ['fullname'=>'required']);
        if($validator->fails()){  
            Session::flash('message',['title'=>'Uyarı!','text'=>'Lütfen! Müşteri adını giriniz ','type'=>'error']);
            return redirect()->back()->withInput();
        }
        $record = Customer::find($id);
        $record->user_id = 1;
        $record->fullname = gets('fullname'); 
        $record->first_letter_name = $record->fullname[0];
        $record->surname = gets('surname');
        $record->phone = gets('phone');
        $record->email = gets('email');
        $record->near_fullname = gets('near_fullname');
        $record->near_phone = gets('near_phone');
        $record->address = gets('address');
        $record->content = gets('content');
        $record->status = gets('status');
        $record->save();

        if($record->save()){
            Session::flash('message',['title'=>'Tebrikler!','text'=>'Müşteri başarıyla düzeltildi.','type'=>'success']);
            return redirect()->to(clink('customer-view',$record->id))->withInput();
        }else { 
            Session::flash('message',['title'=>'Hata!','text'=>'Müşteri düzeltilemedi! Lütfen tekrar deneyiniz','type'=>'error']);
            return redirect()->back()->withInput(); 
        }  

    }

    public function getDelete($id, $recovery = '')
    {
        $record = Customer::find($id);
        if( count($record)<=0 )
            return redirect(clink('customer'));
        if($recovery=='recovery')
            $record->status = 'publish';
        else {
            Work::where('customer_id',$record->id)->update(['status'=>'trash']);
            $record->status = 'trash';
        }
        $record->save();

        if($record->save()){
            if($recovery=='recovery')
                Session::flash('message',['title'=>'Tebrikler!','text'=>'Müşteri başarıyla geri yüklenmiştir.','type'=>'success']);
            else 
                Session::flash('message',['title'=>'Tebrikler!','text'=>'Müşteri başarıyla silinmiştir.','type'=>'success']);
            return redirect()->back()->withInput(); 
        }else { 
            Session::flash('message',['title'=>'Hata!','text'=>'Müşteri silinemedi! Lütfen tekrar deneyiniz','type'=>'error']);
            return redirect()->back()->withInput(); 
        }  
    }

    public function getTrash()
    { 
        $records = Customer::where('status','trash')->get();
        $recordsCount = count($records); 
        return view(vw('theme.customer.trash'), compact('records','recordsCount'))->with(array('title'=>'Silinmiş Müşteriler'));
    }   
}