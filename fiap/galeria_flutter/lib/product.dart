import 'package:flutter/material.dart';

class Product extends StatefulWidget {
  final String name;
  final String description;
  final String image;

  Product(this.name, this.description, this.image);
  
  @override
  _ProductState createState() => _ProductState();

}

class _ProductState extends State<Product> {
  @override
  Widget build(BuildContext context) {
    return Container(
      child: Center(
        child: Column(
          children: <Widget> [
            Card(
              child: (
                Stack(
                  children: <Widget>[
                    Container(
                      width: 400,
                      height: 400,
                      child: Image.asset(
                        widget.image,
                      ),
                    ),
                    Positioned(
                      width: 400,
                      height: 400,
                      child: Align(
                        alignment: FractionalOffset.bottomCenter,
                        child: Column(
                            crossAxisAlignment: CrossAxisAlignment.center,
                            mainAxisSize: MainAxisSize.max,
                            mainAxisAlignment: MainAxisAlignment.end,
                            children: <Widget> [
                              Container(
                                child: Text(widget.name),
                                margin: EdgeInsets.only(bottom: 10.0),
                              ),
                              Container(
                                child: Text(widget.description),
                                margin: EdgeInsets.only(bottom: 10.0),
                              ),
                            ]
                        )
                      )
                    )
                  ],
                )
              )
            )
          ]
        )
      ),
    );
  }
}