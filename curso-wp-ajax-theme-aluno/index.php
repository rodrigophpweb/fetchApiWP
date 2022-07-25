<?php get_header(); ?>
<div class="container">
	<!-- topo -->
	<section class="topo">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>WordPress Developer</h1>
				<h4>Ajax sem segredos</h4>
			</div>
		</div>
	</section>
	<div class="row">
		<div class="col-md-9">

			<!-- busca rápida -->
			<section class="busca-rapida">
				<button type="button" id="btn-limpar" class="btn btn-danger btn-sm">Limpar</button>
				<div class="input-group">
					<div class="input-group-addon">Buscar</div>
					<input type="text" id="campo-busca" class="form-control form-control-lg" placeholder="O que você procura?">
				</div>
			</section>
			<!-- fim busca rápida -->

			<!-- ajax load -->
			<div class="ajax-info" id="loading">
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%;"></div>
				</div>
			</div>
			<!-- fim ajax load -->

			<!-- lista posts -->
			<section class="lista-posts">

				<!-- item -->
				<div class="item">
					<div class="card">
						<div class="card-body">
							<h4>Título do post</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus reiciendis excepturi nulla nesciunt voluptatum ipsum numquam, obcaecati, suscipit fugiat sequi, est repellat iste, unde eveniet vitae blanditiis quos eos tempora!</p>
						</div>
						<div class="card-footer text-right">
							<button type="button" class="btn btn-sm btn-primary btn-detalhes" data-toggle="modal" data-target="#detalhes-post">Leia mais</button>
							<button type="button" class="btn btn-sm btn-info btn-curtir"><span class="text">Gostei</span> <span class="badge badge-light">0</span></button>
						</div>
					</div>
				</div>
				<!-- fim item -->

				<!-- item -->
				<div class="item">
					<div class="card">
						<div class="card-body">
							<h4>Título do post</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus reiciendis excepturi nulla nesciunt voluptatum ipsum numquam, obcaecati, suscipit fugiat sequi, est repellat iste, unde eveniet vitae blanditiis quos eos tempora!</p>
						</div>
						<div class="card-footer text-right">
							<button type="button" class="btn btn-sm btn-primary btn-detalhes" data-toggle="modal" data-target="#detalhes-post">Leia mais</button>
							<button type="button" class="btn btn-sm btn-info btn-curtir"><span class="text">Gostei</span> <span class="badge badge-light">0</span></button>
						</div>
					</div>
				</div>
				<!-- fim item -->

			</section>
			<!-- fim lista posts -->

			<!-- paginacao -->
			<section class="paginacao">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item active"><span class="page-link">1</a></li>
						<li class="page-item"><span class="page-link">2</a></li>
						<li class="page-item"><span class="page-link">3</a></li>
						<li class="page-item"><span class="page-link">4</a></li>
						<li class="page-item"><span class="page-link">5</a></li>
					</ul>
				</nav>
			</section>
			<!-- fim paginacao -->

		</div>
		<div class="col-md-3">

			<!-- categorias -->
			<ul class="list-group">
				<li class="list-group-item active">Todos</li>
				<li class="list-group-item">Categoria 1</li>
				<li class="list-group-item">Categoria 2</li>
				<li class="list-group-item">Categoria 3</li>
				<li class="list-group-item">Categoria 4</li>
			</ul>
			<!-- fim categorias -->

		</div>
	</div>
</div>

<!-- modal -->
<div class="modal fade" id="detalhes-post">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Título do post</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint distinctio facere aliquid consequatur quidem excepturi neque harum. Sit dolorum itaque commodi, vero officiis, ab. Omnis cum dolorum optio, porro aliquid!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit id, fugiat, ab, laudantium esse eius ipsum consequuntur atque veniam totam, quos sit? Ducimus vero dignissimos fuga consequatur quibusdam similique esse!</p>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>