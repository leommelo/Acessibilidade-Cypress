@props(['itemChecklist','avaliacao','tem_erro','id_demanda'])

            @if(isset($tem_erro["$itemChecklist->id"]))
                    @if($avaliacao["$itemChecklist->id"] === 3)
                        <div class="situacaonsa">
                            <p>Não se aplica</p>
                        </div>
                    @elseif($avaliacao["$itemChecklist->id"] === 2)
                        <div class="situacaonao">
                            <p>Não está de acordo</p>
                        </div>
                    @elseif($avaliacao["$itemChecklist->id"] === 1)
                        <div class="situacaosim">
                            <p>Está de acordo</p>
                        </div>
                    @endif
                    <nav class="opcoesVerificacao">
                        <span class="material-symbols-outlined" id="botao_deletar">delete</span>
                        <a id="open-modal" class="botao_deletar open-modal" data-item-id={{$itemChecklist->id}}>Deletar</a>
                        <div id="fade" class="hide"></div>
                        <div id="modal" class="hide">
                            <h4 id="popup_titulo">Tem certeza que deseja excluir a avaliação?</h4>
                            <form id="deleteForm" action="{{ route('erro.remove') }}" method="POST" style="display: none;">
                                <input type="hidden" id="id_valor" name="id">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button href="#" onclick="event.preventDefault(); document.getElementById('deleteForm').submit();" id="remover">SIM</button>
                            <button class="botao_nao" id="close-modal">NÃO</button>
                        </div>
                        <nav class="opcoesVerificacao">
                            <span class="material-symbols-outlined" id="botao_editar">edit</span>
                            <a href="{{ route('erro.mostrar', ['id' =>  $itemChecklist ,'rota' => 'erro.update','metodo' => "PUT",'demanda'=>$id_demanda,'pgs'=>$pgs])}}">Editar</a>
                        </nav>
                    </nav>
            @else
                    <div class="situacaoNaoAvaliado">
                        <p>Ainda não avaliado</p>
                    </div>
                    <nav class="opcoesVerificacao">
                        <span class="material-symbols-outlined" id="icon-realizarVerificacao">sticky_note_2</span>
                        <a href="{{ route('erro.mostrar', ['id' =>  $itemChecklist , 'rota' => 'erro.armazenar', 'metodo' => "POST", 'demanda'=>$id_demanda])}}">Realizar verificação</a>
                    </nav>
            @endif