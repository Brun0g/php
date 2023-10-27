<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>

    <link rel="stylesheet" href="../view/styles/menu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet">

</head>
<style>
.product-container {
    display: flex;
    flex-wrap: wrap;

}

.product-item {
    flex: 1;
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;

}

.product-name {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    border: solid white 1px;
}

.product-info {
    font-size: 14px;
    color: #666;
    border: solid white 1px;
    text-align: center;
}

.delete-button {
    background-color: #f00;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;

}


.product,
.estabelecimento {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    align-content: center;
    color: greenyellow;
    font-size: 14px;
    /* Ajuste a altura máxima conforme necessário */
    text-align: center;
}

.product-name,
.estabelecimento-name,
.estabelecimento-info,
.product-info {
    color: #fff;
    font-size: 14px;
}


.product tr,
.estabelecimento tr {
    text-align: center;
    width: 100%;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.product table,
.estabelecimento table {
    width: 100%;
}

.excluir-button {
    font-weight: 900;
}

/* Estilo para os labels */
.popup2 label {
    display: block;
    margin-top: 10px;
    color: #fff;
    font-size: 16px;
}

/* Estilo para os selects e inputs */
.popup2 select,
.popup2 input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;

}


.button5 {
    color: black;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    width: 100%;
    padding: 1.5rem;
    border: none;
    /*Typography stuff*/
    font-size: 1.5rem;
    background-color: greenyellow;
    font-weight: 900;
}

/* Estilo para o botão de submit quando hover (passar o mouse por cima) */
.button5:hover {
    background-color: black;
    box-shadow: 0 0 10px rgb(173, 255, 47, 0.9);
    color: greenyellow;
    border-radius: 5px;
    transition: all ease-in-out 0.5s;
}
</style>