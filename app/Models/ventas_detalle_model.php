<?php

namespace App\Models;
use CodeIgniter\Model;

class ventas_detalle_model extends Model 
{
	protected $table = 'ventas_detalle';
	protected $primaryKey = 'id';
	protected $allowedFields = ['venta_id', 'producto_id', 'cantidad', 'precio'];

	public function getDetalles($id = null, $id_usuario = null) {
		$db = \Config\Database::connect();
		$builder = $db->table('ventas_detalle');
		$builder->select('*');
		$builder->join('ventas_cabecera', 'ventas_cabecera.id_venta = ventas_detalle.venta_id');
		$builder->join('productos', 'productos.id = ventas_detalle.producto_id');
		$builder->join('usuarios', 'usuarios.id = ventas_cabecera.usuario_id');
		if ($id != null) {
			$builder->where('ventas_cabecera.id_venta', $id);
		}

		$query = $builder->get();
		return $query->getResultArray();
	}
}
?>