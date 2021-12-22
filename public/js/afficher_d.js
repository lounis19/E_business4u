function afficher_cacher(id)
{
    if(document.getElementById(presenter).style.visibility=="hidden")
    {
        document.getElementById(presenter).style.visibility="visible";
        document.getElementById('bouton_'+pre).innerHTML='Cacher le texte';
    }
    else
    {
        document.getElementById(id).style.visibility="hidden";
        document.getElementById('bouton_'+id).innerHTML='Afficher le texte';
    }
    return true;
}