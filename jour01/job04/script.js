function bisextile (annee) 
{
    if ((annee % 4 == 0) && ((annee % 100 != 0) || (annee % 400 == 0))) return console.log('C est une année bisextile !');
    else return console.log('Ce n est pas une année bisextile!');
}

annee = 2020;

bisextile(annee);

