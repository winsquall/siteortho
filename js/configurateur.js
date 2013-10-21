function reset() {
    $("#config")
            .html(
                    "<img class=\"configCouleur\" src=\"images/appliconfig/baseNBKart.png\"/>");

}

function impression() {


    var chiranaDosAppuiTete = $('#chiranaDosAppuiTete').text();
    var chiranaAppuiTete = $('#chiranaAppuiTete').text();
    var chiranaDosDossier = $('#chiranaDosDossier').text();
    var chiranaSiege = $('#chiranaSiege').text();
    var chiranaSousSiege = $('#chiranaSousSiege').text();
    var chiranaPiedSiegeHaut = $('#chiranaPiedSiegeHaut').text();
    var chiranaPiedSiegeBas = $('#chiranaPiedSiegeBas').text();
    var chiranaPiedAvant = $('#chiranaPiedAvant').text();
    var chiranaPiedArriere = $('#chiranaPiedArriere').text();
    var chiranaPedale = $('#chiranaPedale').text();
    var chiranaBrasSiege = $('#chiranaBrasSiege').text();
    var chiranaTabletteSiege = $('#chiranaTabletteSiege').text();
    var chiranaTabletteKart = $('#chiranaTabletteKart').text();
    var chiranaPiedKart = $('#chiranaPiedKart').text();

    var url = './fpdf/generePDF.php?chiranaDosAppuiTete=' + chiranaDosAppuiTete + '&chiranaAppuiTete=' + chiranaAppuiTete
    + '&chiranaDosDossier=' + chiranaDosDossier + '&chiranaSiege=' + chiranaSiege + '&chiranaSousSiege=' + chiranaSousSiege
    + '&chiranaPiedSiegeHaut=' + chiranaPiedSiegeHaut + '&chiranaPiedSiegeBas=' + chiranaPiedSiegeBas + '&chiranaPiedAvant=' + chiranaPiedAvant
    + '&chiranaPiedArriere=' + chiranaPiedArriere + '&chiranaPedale=' + chiranaPedale
    + '&chiranaBrasSiege=' + chiranaBrasSiege + '&chiranaTabletteSiege=' + chiranaTabletteSiege
    + '&chiranaTabletteKart=' + chiranaTabletteKart + '&chiranaPiedKart=' + chiranaPiedKart;

    location.href = url;


}
function envoyerEmail() {


    var chiranaDosAppuiTete = $('#chiranaDosAppuiTete').text();
    var chiranaAppuiTete = $('#chiranaAppuiTete').text();
    var chiranaDosDossier = $('#chiranaDosDossier').text();
    var chiranaSiege = $('#chiranaSiege').text();
    var chiranaSousSiege = $('#chiranaSousSiege').text();
    var chiranaPiedSiegeHaut = $('#chiranaPiedSiegeHaut').text();
    var chiranaPiedSiegeBas = $('#chiranaPiedSiegeBas').text();
    var chiranaPiedAvant = $('#chiranaPiedAvant').text();
    var chiranaPiedArriere = $('#chiranaPiedArriere').text();
    var chiranaPedale = $('#chiranaPedale').text();
    var chiranaBrasSiege = $('#chiranaBrasSiege').text();
    var chiranaTabletteSiege = $('#chiranaTabletteSiege').text();
    var chiranaTabletteKart = $('#chiranaTabletteKart').text();
    var chiranaPiedKart = $('#chiranaPiedKart').text();
    var nom = $('#nom').val() + ' ' + $('#prenom').val();
    var email = $('#email').val();
    var tel = $('#telephone').val();

    var url = './bat/generePDFetEmail.php?chiranaDosAppuiTete=' + chiranaDosAppuiTete + '&chiranaAppuiTete=' + chiranaAppuiTete
    + '&chiranaDosDossier=' + chiranaDosDossier + '&chiranaSiege=' + chiranaSiege + '&chiranaSousSiege=' + chiranaSousSiege
    + '&chiranaPiedSiegeHaut=' + chiranaPiedSiegeHaut + '&chiranaPiedSiegeBas=' + chiranaPiedSiegeBas + '&chiranaPiedAvant=' + chiranaPiedAvant
    + '&chiranaPiedArriere=' + chiranaPiedArriere + '&chiranaPedale=' + chiranaPedale
    + '&chiranaBrasSiege=' + chiranaBrasSiege + '&chiranaTabletteSiege=' + chiranaTabletteSiege
    + '&chiranaTabletteKart=' + chiranaTabletteKart + '&chiranaPiedKart=' + chiranaPiedKart +
    '&nom=' + nom + '&email=' + email + '&tel=' + tel;

    location.href = url;


}