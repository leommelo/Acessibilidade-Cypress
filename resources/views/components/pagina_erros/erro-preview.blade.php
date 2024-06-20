@props(['itemChecklist','tem_erro','pgs'])

        @if(isset($tem_erro["$itemChecklist->id"]) and $tem_erro["$itemChecklist->id"]->em_cfmd == "2")
                <div class="info_erro">
                    <h4>INFORMAÇÕES DO ERRO</h4>
                </div>
                <hr class="linha_preta">
                <h4>Descrição do erro</h4>
                {!! nl2br($tem_erro["$itemChecklist->id"]->descricao) !!}
                <hr class="linha_preta">
                <h4>Páginas</h4>
                @foreach ($pgs["$itemChecklist->id"] as $paginas)
                    <p>{{$paginas->pagina}} - {{$paginas->url}}</p>
                @endforeach
                @if(isset($tem_erro["$itemChecklist->id"]->images))
                    <hr class="linha_preta">
                    @foreach ($tem_erro["$itemChecklist->id"]->images as $imagem)
                        <h5>Imagem</h5>
                        <img src="{{asset($imagem->path_image)}}" class="imagens">
                    @endforeach
                @endif
        @endif