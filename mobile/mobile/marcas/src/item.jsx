function item({nome}) {
    return (
        <>
            <div>
                nome: {nome} <br/>
                <button>Editar</button>
                <button>Remover</button>
            </div> <br/>
        </>
    )
}

export default item;