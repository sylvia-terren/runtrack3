function sommenombrespremiers(n1,n2) {
      
    if (n1 && n2<2) {
        n1,n2 == false;
    }

    for (i = 2; i <= Math.sqrt(n1,n2); i++) {
        if (n1,n2 % i == 0) {
            n1,n2 == false;
        }
           else n1,n2 == true;
        }

      if(n1 && n2 == true) return console.log(sommenombrespremiers(n1 + n2));
  }

  console.log(sommenombrespremiers(2,4));
