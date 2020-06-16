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
        child: Stack(
            alignment: Alignment.center,
            children: <Widget>[
              Positioned(
                child: Card(
                    child: Image.asset(
                      widget.image,
                      height: MediaQuery.of(context).size.height,
                      width: MediaQuery.of(context).size.width,
                      fit: BoxFit.fitHeight,
                    )
                ),
              ),
              Positioned(
                    child: Align(
                        alignment: FractionalOffset.bottomCenter,
                        child:Container(
                          child: Text(
                              widget.name
                          ),
                          margin: EdgeInsets.only(bottom: 60.0),
                          decoration: new BoxDecoration (
                              color: Colors.black
                          ),
                        )
                    ),

              ),
              Positioned(
                  child: Align(
                      alignment: FractionalOffset.bottomCenter,
                      child:Container(
                        child: Text(
                            widget.description
                        ),
                        margin: EdgeInsets.only(bottom: 40.0),
                      )
                  )
              ),
            ],
          )
      );
  }
}