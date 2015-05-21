<?php
/* 5-20-15
 * Practice project from http://www.theodinproject.com/web-development-101/javascript-and-jquery
 * 
 *
 *  In progress....
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>etch a sketch</title>
</head>
<body>
</body>
</html>
<style>
div {
 border: 1px dotted green;
 padding: 10px;    
}

table{
    border: 1px solid red;
}

tr {
    height: 10px;
    width: 10px;
}

</style>
<script type="text/script">
var createGrid = function(num){
    var div = document.createElement('div');
    div.id = 'div-container';
    document.getElementsByTagName('body')[0].appendChild(div);
    
    var table = document.createElement('table');
    table.id = 'table-grid';
    div.appendChild(table);
    
    createCells(num);
}

var createCells = function(num){

    for(var i = 0; i < num; i++){
        var td = document.createElement('td');
        var tr = document.createElement('tr');
        td.id = 'cell ' + i;
        var target = document.getElementById('table-grid');
        target.appendChild(tr).appendChild(td);
    }

}

createGrid(16);
</script>
