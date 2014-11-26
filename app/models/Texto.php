<?php

class Texto extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	protected $table = "textos";
	
    public $timestamps = false;

}