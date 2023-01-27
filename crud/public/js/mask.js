document.getElementById('telefone').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});
document.getElementById('edit_telefone').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

function mascara(i){
    var v = i.value;
    if(isNaN(v[v.length-1])){
     i.value = v.substring(0, v.length-1);
     return;
 }
 i.setAttribute("maxlength", "14");
 if (v.length == 3 || v.length == 7) i.value += ".";
 if (v.length == 11) i.value += "-";
}
