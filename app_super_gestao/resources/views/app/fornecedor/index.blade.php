<h3>Fornecedor</h3>

{{-- Esse comentário não aparece no código fonte do navegador --}}
<!-- Esse comentário aparece no código fonte do navegador -->

{{-- {{ 'Texto de teste' }} --}}

@php 
    // Para comentários de uma linha
    /*
        Para Comentários de múltiplas linhas
    */

    // echo 'Texto de teste';
@endphp

{{-- @dd($fornecedores); --}}
{{-- @if( count($fornecedores) > 0 && count($fornecedores) < 10 )    
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif( count($fornecedores) > 10 )
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif --}}


{{-- 
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor Inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') {{-- Se o retorno da condição for false, ele executa --}
    Fornecedor Inativo
@endunless --}}

@isset($fornecedores)
    
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração Atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->first)
            <strong>Primeira Iteração do Loop</strong>
        @endif
        @if($loop->last)
            <strong>Última Iteração do Loop</strong>
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>

        @empty
            Não existem fornecedores cadastrados
    @endforelse
@endisset

