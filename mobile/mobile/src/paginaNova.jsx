const func = function () {

}

function PaginaNova({numero, comando}) {
    return (
        <>
            <h1>{ numero + numero}</h1>
            <h2 onClick={comando}>Minha página</h2>
        </>
    )
}

export default PaginaNova;