import 'package:flutter/material.dart';
import 'product.dart';

class HomeBodyClass extends StatelessWidget {

  Widget generateList(){
   return PageView(
     physics : BouncingScrollPhysics(),
     children: <Widget>[
        Product('IMac', 'Computador topzeira', 'assets/foto1.jpeg'),
        Product('Macbook Pro', 'Notebook Topzeira', 'assets/foto2.jpeg'),
        Product('Iphone 11', 'Celular topzeira', 'assets/foto3.jpg'),
        Product('Mac Pro', 'Computador que custa o PIB do Brasil', 'assets/foto4.jpg'),
        Product('PS5', 'Videogame que um dia meu filho vai ter', 'assets/foto5.png'),
      ],
      scrollDirection: Axis.horizontal,
    );
  }

  @override
  Widget build(BuildContext context) {
    return Align(
      alignment: Alignment.topCenter,
      child: SafeArea(
        left: true,
        top: true,
        right: true,
        bottom: true,
        child: generateList()
      ),
    );
  }
}