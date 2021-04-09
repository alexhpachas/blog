<?php

namespace App\Http\Requests;

use App\Models\Tag;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        } */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route()->parameter('post');//Recuperamos el post Actual

        $rules = [
            'nombre'=>'required',
            'slug'=>"required|unique:posts",
            'estado'=>'required|in:1,2',
            'file'=>'image'
        ];

        if($post){
            $rules['slug']="required|unique:posts,slug,$post->id";
        }

        if($this->estado == 2){
            $rules = array_merge($rules,[
                'categoria_id'=>'required',
                'tags'=>'required',
                'extract'=>'required',
                'body'=>'required'
            ]);
        }

        return $rules;
    }
}
