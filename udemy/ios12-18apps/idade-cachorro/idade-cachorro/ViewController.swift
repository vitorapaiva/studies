//
//  ViewController.swift
//  idade-cachorro
//
//  Created by Vitor Paiva on 11/03/21.
//

import UIKit

class ViewController: UIViewController {
    
    @IBOutlet weak var campoIdadeCachorro: UITextField!
    @IBOutlet weak var legendaResultado: UILabel!
    
    @IBAction func descobrirIdade(_ sender: Any) {
        var idadeCachorro: integer_t
        
        idadeCachorro = integer_t(campoIdadeCachorro.text!)! * 7
        legendaResultado.text = "Idade do cachorro: "  + String(idadeCachorro)
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        print("Meu primeiro app")
        
    }


}

