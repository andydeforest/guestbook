<?php

namespace App\Http\Controllers\Api;

use App\Signature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportSignature extends Controller {
	
	public function update(Signature $signature) {
		$signature->flag();
		return $signature;
	}


}
