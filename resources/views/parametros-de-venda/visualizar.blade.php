@extends('base/layout')

@section('conteudo')
<div class="row breadcrumb-div">
    <div class="col-md-6">
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Início</a></li>
            <li><a href="/clientes">parâmetros de venda</a></li>
            <li class="active">Cadastrar parâmetros de venda </li>
        </ul>
    </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <h5>Cadastrar comissão de venda</h5>
            </div>
        </div>
        <div class="panel-body">

          <form class="p-20" action="javascript:void(0)" method="POST" id="form-comissao">
              @csrf
              <meta name="csrf-token" content="{{ csrf_token() }}">
              <input type="hidden" id="url_form" name="url_form" value="#">                  
              <div id="campos-cadastro" >
                  <h5 class="underline mt-n">% da comissão do vendedor</h5>
                  @foreach ($parametros as $parametro)
                  @if ($parametro->id == '1')
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="comissao">Comissão <b>*</b></label>
                              <input type="text" class="form-control" id="comissao" name="valor" value="{{ $parametro->valor}}">
                              <input type="hidden" name="id" value="{{ $parametro->id }}">
                          </div>
                      </div>
                  </div>                        


                  <small class="form-text text-muted">Os campos com <b>*</b> são obrigatórios o preenchimento!</small>

                  <div class="row">
                      <div class="col-md-12">
                          <div class="btn-group pull-right mt-10" role="group">
                              <a href="/" class="btn bg-black btn-wide"><i class="fa fa-times"></i>Voltar</a href="/clientes">
                              <button type="button" class="btn btn-primary btn-wide" id="btn-cadastrar" onclick="alterarParametro('form-comissao')" ><i class="fa fa-arrow-right"></i>Cadastrar</button>
                          </div>
                      </div>
                  </div>
                  @endif
                  @endforeach
              </div>
          </form>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <h5>Cadastrar desconto máximo de venda</h5>
            </div>
        </div>
        <div class="panel-body">

          <form class="p-20" action="javascript:void(0)" method="POST" id="form-desconto">
              @csrf
              <meta name="csrf-token" content="{{ csrf_token() }}">
              <input type="hidden" id="url_form" name="url_form" value="#">                  
              <div id="campos-cadastro" >
                  <h5 class="underline mt-n">% de desconto em vendas</h5>
                  @foreach ($parametros as $parametro)
                  @if ($parametro->id == '2')
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="desconto">Desconto <b>*</b></label>
                              <input type="text" class="form-control" id="desconto" name="valor"  value="{{ $parametro->valor}}">
                              <input type="hidden" name="id" value="{{ $parametro->id }}">
                          </div>
                      </div>
                  </div>                        


                  <small class="form-text text-muted">Os campos com <b>*</b> são obrigatórios o preenchimento!</small>

                  <div class="row">
                      <div class="col-md-12">
                          <div class="btn-group pull-right mt-10" role="group">
                              <a href="/categorias" class="btn bg-black btn-wide"><i class="fa fa-times"></i>Voltar</a href="/clientes">
                              <button type="button" class="btn btn-primary btn-wide" id="btn-cadastrar" onclick="alterarParametro('form-desconto')"><i class="fa fa-arrow-right"></i>Cadastrar</button>
                          </div>
                      </div>
                  </div>
                  @endif
                  @endforeach
              </div>
          </form>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <h5>Cadastrar limite de crédito</h5>
            </div>
        </div>
        <div class="panel-body">

          <form class="p-20" action="javascript:void(0)" method="POST" id="form-credito">
              @csrf
              <meta name="csrf-token" content="{{ csrf_token() }}">
              <input type="hidden" id="url_form" name="url_form" value="#">                  
              <div id="campos-cadastro" >
                  <h5 class="underline mt-n">Limite de venda em crédito (R$)</h5>
                  @foreach ($parametros as $parametro)
                  @if ($parametro->id == '3')
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="limite">Limite <b>*</b></label>
                              <input type="text" class="form-control" id="limite" name="valor" value="{{ $parametro->id }}">
                              <input type="hidden" name="id" value="{{ $parametro->id }}">
                          </div>
                      </div>
                  </div>                        


                  <small class="form-text text-muted">Os campos com <b>*</b> são obrigatórios o preenchimento!</small>

                  <div class="row">
                      <div class="col-md-12">
                          <div class="btn-group pull-right mt-10" role="group">
                              <a href="/categorias" class="btn bg-black btn-wide"><i class="fa fa-times"></i>Voltar</a href="/clientes">
                              <button type="button" class="btn btn-primary btn-wide" id="btn-cadastrar" onclick="alterarParametro('form-credito')"><i class="fa fa-arrow-right"></i>Cadastrar</button>
                          </div>
                      </div>
                  </div>
                  @endif
                  @endforeach
              </div>
          </form>
        </div>
      </div>
  </div>
</div>

<div class="modal fade" id="modal-resposta" tabindex="-1" role="dialog" aria-labelledby="modaRespostaLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalRespostaLabel">Mensagem <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
            </div>
            <div class="modal-body">
                <p id="modal-resposta-texto"></p>
            </div>
            <div class="modal-footer">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                </div>
                <!-- /.btn-group -->
            </div>
        </div>
    </div>
</div>

<script>    
    function alterarParametro(form) {
      var idform = `#${form}`;
      var modal_texto = document.getElementById('modal-resposta-texto');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
          url: "/parametros-de-venda",
          method: 'post',
          data: $(idform).serialize(),
          success: function(response) {

              if (response.resposta == 'alterado') {
                  modal_texto.innerHTML = '';
                  modal_texto.innerHTML = 'Parâmetro alterado com sucesso!';
                  $('#modal-resposta').modal({
                      show: true
                  });
                  $('#btn-cadastrar').html('Cadastrar');
              } else {
                      if (response.resposta == 'vazio') {
                          modal_texto.innerHTML = '';
                          modal_texto.innerHTML = 'Por favor, verifique se os campos obrigatórios foram preenchidos!';
                          $('#modal-resposta').modal({
                              show: true
                          });
                          $('#btn-cadastrar').html('Cadastrar');
                      } 
              }
          },
          error: function(response) {
              modal_texto.innerHTML = '';
              modal_texto.innerHTML = 'Erro: ' + response.responseJSON.message;
              $('#modal-resposta').modal({
                  show: true
              });
              $('#btn-cadastrar').html('Cadastrar');
          }
      });
      
    }
</script>
@stop