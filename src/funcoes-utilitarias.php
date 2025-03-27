<?php

function formatarPreco ($preco) {
    return "R$ ".number_format($preco, 2, ",", ".");
}