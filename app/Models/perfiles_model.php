<?php

namespace App\Models;
use CodeIgniter\Model;

class perfiles_model extends Model 
{
	protected $table = 'perfiles';
	protected $primaryKey = 'id';
	protected $allowedFields = ['descripcion'];
}
?>