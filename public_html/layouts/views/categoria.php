<?php 
    include(appPath('categoria/listarCategoria'));
?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Manual</a>
        </li>
        <li class="breadcrumb-item active">Categorias</li>
      </ol>
      <!-- Botao Adicionar Categoria -->
      <button id="adicionar-categoria" class="col-2 btn btn-success" href="adicionarCategoria.php">
            <i class="fas fa-user-plus"></i> Adicionar Categoria
      </button>
      <!-- Tabela de Consulta de Categoria -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Categorias</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Categoria</th>
                  <th>Editar</th>
                  <th>Consultar</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Categoria</th>
                  <th>Editar</th>
                  <th>Consultar</th>
                </tr>
              </tfoot>
              <tbody>
                    <?php while($dados = ibase_fetch_assoc($exec)): ?>
                        <tr>
                            <td><?=$dados['CD_CATEGORIA']	  ?></td>
                            <td><?=$dados['DS_CATEGORIA']	  ?></td>
                            <td>

                                    <form class="edit-produto" method="POST" action="?page=editarCategoria">
                                        <input type="hidden" name="CD_CATEGORIA" value="<?=$dados['CD_CATEGORIA']?>">
                                        <input type="hidden" name="DS_CATEGORIA" value="<?=$dados['DS_CATEGORIA']?>">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                    </form>

                                </td>
                                <td>
                                    <form class="delete-produto" method="POST" action="?page=removerCategoria">
                                        <input type="hidden" name="id_produto" value="<?=$dados['id_produto']?>">
                                        <button class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->