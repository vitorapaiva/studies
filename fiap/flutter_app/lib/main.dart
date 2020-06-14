import 'package:flutter/material.dart';
var titles = [
  "Loxas Gray", "Eugene Garcia", "Kenneth Elliott", "Steven Wheeler", "Eugene Roberts","Adam Gray", "Eugene Garcia", "Kenneth Elliott", "Steven Wheeler", "Eugene Roberts"];
var subTitles = [
  "This is a sample message that crosses over in two lines and goes on for a while.",
  "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
  "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
  "Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
  "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.",
  "This is a sample message that crosses over in two lines and goes on for a while.",
  "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
  "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
  "Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
  "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.",
];
buildItem(String titulo, String subtitulo){
  return ListTile(
    leading: FlutterLogo(),
    title: Text(titulo),
    subtitle: Text(
      subtitulo,
      maxLines: 3,
      overflow: TextOverflow.ellipsis,
    ),
    trailing: Text("1d"),
  );
}
void main() => runApp(MainApp());

class MainApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: DynamicPart(),
    );
  }
}

class DynamicPart extends StatefulWidget {
  @override
  State<StatefulWidget> createState() => DynamicPartState();
}

class DynamicPartState extends State<DynamicPart> {
  var messages = 1;
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Messages"),
        leading: Icon(Icons.menu),
      ),
      body: ListView.separated(
        itemCount: messages,
        separatorBuilder: (BuildContext context, int index) => Divider(),
        itemBuilder: (BuildContext context, int index) {
          return buildItem(titles[index], subTitles[index]);
        },
      ),
      floatingActionButton: Row(
        children: [
          FloatingActionButton(
            onPressed: () {
              if (messages < 10){
                setState(() {
                  messages++;
                });
              }
            },
          child: Icon(Icons.add)),
          FloatingActionButton(
              onPressed: () {
                if (messages > 0){
                  setState(() {
                    messages--;
                  });
                }
              },
              child: Icon(Icons.remove)),
        ]
      ),
    );
  }
}

