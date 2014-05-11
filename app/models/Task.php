<?php 


class Task extends BaseModel
{

	protected $guarded = ['id'];

	protected static $rules = [
		'title' => 'required',
		'body' => 'required',
		
	];

	public function user(){
		return $this->belongsTo('User');
	}
}