<div class="post-popup pst-pj">
	<div class="post-project">
		<h3>Poster une publication</h3>
		<div class="post-project-fields">
			<form method="POST" action="{{route('post.create')}}" enctype="multipart/form-data">
				@csrf 

				<div class="row">
					<div class="col-lg-12" id="titre">
						<input type="text" name="title" placeholder="Title">
					</div>
					<div class="col-lg-12">
						<div class="inp-field">
							<!-- <label>Ajouter un média(optionel)</label> -->
							<select id="media">
								<option value="">Ajouter un média ( optionel )</option>
								<option value="Image">Image</option>
								<option value="Vidéo">Vidéo</option>
								<option value="Document">Document</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12" id="image" style="display: none;">
						<!-- <label>Ajouter images : </label> -->
						<input type="file" class="form-control" name="image">
					</div>

					<div class="col-lg-12" id="video" style="display: none;">
						<!-- <label>Ajouter la vidéo</label> -->
						<input type="file" class="form-control" name="video">
					</div>

					<div class="col-lg-12" id="document" style="display: none;">
						<!-- <label>Ajouter le document</label> -->
						<input type="file" class="form-control" name="document">
					</div>

					{{-- <div class="col-lg-12">
						<div class="price-sec">
							<div class="price-br">
								<input type="text" name="price1" placeholder="Price">
								<i class="la la-dollar"></i>
							</div>
							<span>To</span>
							<div class="price-br">
								<input type="text" name="price1" placeholder="Price">
								<i class="la la-dollar"></i>
							</div>
						</div>
					</div> --}}

					<div class="col-lg-12">
						<textarea name="content" placeholder="Saisissez le text..."></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Publier</button></li>
							<li><a href="#" title="">Annuler</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div><!--post-project end-->
</div><!--post-project-popup end-->

