<div class="container mt-1 mb-1 d-flex justify-content-center">
	<div class="card" style="width: 75%;">
		<div class="card-header text-center">
			<!-- Título -->
			<h2>Alta de Productos</h2>
		</div>
		<!-- Validación -->
		<?php if (!empty(session()->getFlashdata('fail'))): ?>
			<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
		<?php endif; ?>
		<?php if (!empty(session()->getFlashdata('success'))): ?>
			<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
		<?php endif; ?>

		<?php $validation = \Config\Services::validation(); ?>
		<!-- Inicio del formulario -->
		<form action="<?= base_url('/enviar-prod'); ?>" method="post" enctype="multipart/form-data">
			<div class="card-body" media="(max-width:568px)">

				<div class="mb-2">
					<label for="nombre_prod" class="form-label">Producto</label>
					<input class="form-control" type="text" name="nombre_prod" id="nombre_prod" value="<?= set_value('nombre_prod'); ?>" placeholder="Nombre del producto" autofocus>
					<!-- Error -->
					<?php if ($validation->getError('nombre_prod')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('nombre_prod'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="mb2">
					<label for="categoria" class="form-label">Categoría</label>
					<select class="form-control" name="categoria" id="categoria">
						<option value="0" hidden >Seleccionar Categoría</option>
						<?php foreach ($categorias as $categoria): ?>
							<option value="<?= $categoria['id']; ?>" <?= set_select('categoria', $categoria['id']); ?>>
							<?= $categoria['descripcion']; ?>
							</option>
						<?php endforeach; ?>
					</select>
					<!-- Error -->
					<?php if ($validation->getError('categoria')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('categoria'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="mb-2">
					<label for="precio" class="form-label">Precio de costo</label>
					<input class="form-control" type="text" name="precio" id="precio" value="<?= set_value('precio') ?>" placeholder="Precio" autofocus>
					<!-- Error -->
					<?php if ($validation->getError('precio')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('precio'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="mb-2">
					<label for="descripcion" class="form-label">Descripción</label>
					<input class="form-control" type="text" name="descripcion" id="descripcion" value="<?= set_value('descripcion') ?>" placeholder="Descripción" autofocus>
					<!-- Error -->
					<?php if ($validation->getError('descripcion')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('descripcion'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="mb-2">
					<label for="formato" class="form-label">Formato</label>
					<select class="form-control" name="formato" id="formato">
						<option value="<?= set_value('formato') ?>" hidden >Seleccionar Formato</option>
							<option value="1">Físico</option>
							<option value="2">Digital</option>
					</select>
					<!-- Error -->
					<?php if ($validation->getError('formato')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('formato'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="mb-2">
					<label for="stock" class="form-label">Stock</label>
					<input class="form-control" type="text" name="stock" id="stock" value="<?= set_value('stock') ?>" placeholder="Stock" autofocus>
					<!-- Error -->
					<?php if ($validation->getError('stock')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('stock'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="mb-2">
					<label for="imagen" class="form-label">Imagen</label>
					<input class="form-control" type="file" name="imagen" id="imagen" accept="image/png, image/jpg, image/jpeg" >
					<!-- Error -->
					<?php if ($validation->getError('imagen')): ?>
						<div class="alert alert-danger mt-2">
							<?= $validation->getError('imagen'); ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- Botones -->
				<div class="form-group">
					<button type="submit" id="send_form" class="btn btn-primary">Enviar</button>
					<button type="reset" class="btn btn-danger">Limpiar</button>
					<a href="<?= base_url('/crear'); ?>" class="btn btn-secondary">Volver</a>
				</div>
			</div>
		</form> <!-- Fin del formulario -->
	</div>
</div>