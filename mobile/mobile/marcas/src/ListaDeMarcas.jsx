function ListaDeMarcas ({lista}) {
    const adicionar = () => {
        
    }

    const listaFinal = lista.map(function (marca, indice) {
        return (
            <div key={indice}>
                    {marca.id} - 
                    {marca.nome} -
                    {marca.cor}
            </div>
        )
    });

    let botaoAdicionar = (<></>)
    let check = false;
    if (check) {
        botaoAdicionar = (<button onClick={adicionar}>Adicionar</button>)
    }
    
    return (
        <>
            {botaoAdicionar}
            {listaFinal}
        </>
    )
}

export default ListaDeMarcas;