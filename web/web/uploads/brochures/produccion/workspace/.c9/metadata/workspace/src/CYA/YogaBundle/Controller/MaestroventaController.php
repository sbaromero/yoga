{"filter":false,"title":"MaestroventaController.php","tooltip":"/src/CYA/YogaBundle/Controller/MaestroventaController.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":95,"column":24},"end":{"row":96,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":96,"column":0},"end":{"row":96,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":96,"column":24},"end":{"row":97,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":97,"column":0},"end":{"row":97,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":96,"column":24},"end":{"row":102,"column":21},"action":"insert","lines":["             $estadouser = $usuario->getIsActive()","                    ","                    if ( $estadouser == 0)","                    {","                         $this->addFlash('mensaje', 'Este usuario se encuentra inactivo, imposible realizar la venta en cuenta');","                         exit;","                    }"],"id":4}],[{"start":{"row":96,"column":20},"end":{"row":96,"column":37},"action":"remove","lines":["                 "],"id":5}],[{"start":{"row":96,"column":57},"end":{"row":96,"column":58},"action":"insert","lines":[";"],"id":8}],[{"start":{"row":101,"column":25},"end":{"row":101,"column":30},"action":"remove","lines":["exit;"],"id":9}],[{"start":{"row":101,"column":25},"end":{"row":101,"column":79},"action":"insert","lines":["return $this->redirectToRoute('cya_maestroventa_add');"],"id":10}],[{"start":{"row":29,"column":23},"end":{"row":29,"column":26},"action":"remove","lines":["rol"],"id":11},{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"insert","lines":["i"]}],[{"start":{"row":29,"column":24},"end":{"row":29,"column":25},"action":"insert","lines":["s"],"id":12}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"insert","lines":["_"],"id":13}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"remove","lines":["_"],"id":14}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"insert","lines":["_"],"id":15}],[{"start":{"row":29,"column":26},"end":{"row":29,"column":27},"action":"insert","lines":["a"],"id":16}],[{"start":{"row":29,"column":27},"end":{"row":29,"column":28},"action":"insert","lines":["c"],"id":17}],[{"start":{"row":29,"column":28},"end":{"row":29,"column":29},"action":"insert","lines":["t"],"id":18}],[{"start":{"row":29,"column":29},"end":{"row":29,"column":30},"action":"insert","lines":["i"],"id":19}],[{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"insert","lines":["v"],"id":20}],[{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"insert","lines":["e"],"id":21}],[{"start":{"row":30,"column":35},"end":{"row":30,"column":44},"action":"remove","lines":["ROLE_USER"],"id":22},{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"insert","lines":["2"]}],[{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"remove","lines":["2"],"id":23}],[{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"insert","lines":["1"],"id":24}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"remove","lines":["_"],"id":25}],[{"start":{"row":30,"column":34},"end":{"row":30,"column":35},"action":"remove","lines":["'"],"id":26}],[{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"remove","lines":["'"],"id":28}],[{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"remove","lines":["i"],"id":29}],[{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"insert","lines":["I"],"id":30}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"remove","lines":["a"],"id":31}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"insert","lines":["A"],"id":32}],[{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"remove","lines":["I"],"id":33}],[{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"insert","lines":["i"],"id":34}]]},"ace":{"folds":[],"scrolltop":215.49995708465576,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":284,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1482539371763,"hash":"7a910b7d6ee1004ae84a7ec85cf14cef75ed149d"}