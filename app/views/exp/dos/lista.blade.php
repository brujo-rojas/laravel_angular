<div ng-repeat="item in lista">
	<span>{{item.titulo}} </span>
	<span>{{item.descripcion}}</span>
	<button type="button" class="btn btn-danger btn-xs" ng-click="borrarItem({{item.id}})">borrar</button>
</div>



<form ng-submit="agregarItem()"  class="form-inline" role="form">

	<div class="form-group">
		<input type="text" required class="form-control" id="titulo-nuevo" ng-model="nuevo_titulo" placeholder="titulo">
		<input type="text" required class="form-control" id="descripcion-nueva" ng-model="nueva_descripcion" placeholder="descripcion">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>