//
//  ViewController.swift
//  Sorteio
//
//  Created by Vitor Paiva on 17/03/21.
//

import UIKit

class ViewController: UIViewController {

    @IBAction func gerarNumero(_ sender: Any) {
        let numero = arc4random_uniform(11)
        numeroSorteado.text = String(numero)
    }
    
    @IBOutlet weak var numeroSorteado: UILabel!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
    }


}

