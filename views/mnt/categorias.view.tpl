<section><h1>Mantenimiento de Categorias</h1></section>
<hr/>
<form action="index.php?page=categorias" method="post">
<section class="row">
  <h2>Filtrar por nombre</h2>
  <div class="col-sm-12 col-md-10">
    <label class="col-sm-12 col-md-3" for="cln_txtfilter">Nombre</label>
    <input type="text" name="cln_txtfilter" id="cln_txtfilter" value="{{cln_txtfilter}}"
      placeholder="Nombre" class="col-sm-12 col-md-9"/>
  </div>
  <div class="col-sm-12 col-md-2">
    <button type="submit" name="btnFiltrar">Actualizar</button>
  </div>
</section>
</form>
<hr/>
<section class="row">
  <table class="col-sm-12">
    <thead class="zebra">
      <tr>
        <th>
          Código
        </th>
        <th>
          Nombre
        </th>
      </tr>
    </thead>
    <tbody>
      {{foreach categorias}}
        <tr>
          <td>
            {{catecod}}
          </td>
          <td>
            {{catenom}}
          </td>
          <td>
            <a href="index.php?page=categoria&mode=INS&catecod={{catecod}}">Adicionar</a><br/>
            <a href="index.php?page=categoria&mode=UPD&catecod={{catecod}}">Editar</a><br/>
            <a href="index.php?page=categoria&mode=DSP&catecod={{catecod}}">Visualizar</a>
          </td>
        </tr>
        {{endfor categorias}}
    </tbody>
    <tfoot>

    </tfoot>
  </table>
</section>