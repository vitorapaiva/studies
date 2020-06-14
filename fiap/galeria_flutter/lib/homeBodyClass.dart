import 'package:flutter/material.dart';
import 'product.dart';

class HomeBodyClass extends StatelessWidget {

  Widget generateList(){
   return PageView( //fiz a opcao de utilizar PageView inves de utilizar o ListView pois o comportamento do PageView me parece mais adequado ao que esta sendo desenvolvido
     physics : BouncingScrollPhysics(),
     children: <Widget>[
        Product('Entry A', 'Description', 'assets/foto1.jpeg'),
        Product('Entry B', 'Description', 'assets/foto2.jpeg'),
        Product('Entry C', 'Description', 'assets/foto3.jpg'),
      ],
      scrollDirection: Axis.horizontal,
    );
  }

  @override
  Widget build(BuildContext context) {
    return Align(
      alignment: Alignment.topLeft,
      child: SafeArea(
        left: true,
        top: true,
        right: true,
        bottom: true,
        minimum: const EdgeInsets.all(16.0),
        child: generateList()
      ),
    );
  }
}