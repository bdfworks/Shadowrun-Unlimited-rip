idRef {
  id: "52a0f69b336331ac3a007d38"
}
ui_name: "SerialRogue"
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d6e"
  }
  index: 0
  text: ""
  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "Comparison (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MetSerialRogue"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "IsOrIsNot"
            }
            args {
              int_value: 1
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "bool"
            }
            args {
              int_value: 0
            }
          }
        }
      }
    }
    nextNodeIndex: 1
    hideIfUnavailable: true
  }
  branches {
    responseText: "Rogue. I wanna make a deal."
    conditions {
      ops {
        functionName: "Comparison (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MetSerialRogue"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "IsOrIsNot"
            }
            args {
              int_value: 1
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "bool"
            }
            args {
              int_value: 1
            }
          }
        }
      }
    }
    nextNodeIndex: 5
    hideIfUnavailable: true
  }
  branches {
    responseText: "Nevermind."
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d71"
  }
  index: 1
  text: "Hey \'runner. What brings you here?"
  branches {
    responseText: "What makes you think I\'m a \'runner?"
    nextNodeIndex: 2
  }
  nodeType: ConversationNodeType_Simple
  actions {
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "MetSerialRogue"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Preset Value (int)"
          args {
            string_value: "bool"
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d74"
  }
  index: 2
  text: "Well only two types of people come around these parts, I can tell you certainly aren\'t one of these digital groupies."
  branches {
    responseText: "Keen eye."
    nextNodeIndex: 3
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d77"
  }
  index: 3
  text: "Well the analyze program I ran on your persona helps."
  branches {
    responseText: "Very clever."
    nextNodeIndex: 4
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d7a"
  }
  index: 4
  text: "Let me introduce myself. My handle is Serial Rogue, and I deal in all manner of pay data you might scrounge from raided data stores. So if your looking to unload some digital loot, let me know."
  branches {
    responseText: "Something tells me, we will be seeing a lot of each other Rogue."
    nextNodeIndex: 0
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52a0f6ae336331ac3a007d80"
  }
  index: 5
  text: "Well let\'s just see what you have shall we?"
  branches {
    responseText: "Nevermind."
    nextNodeIndex: -1
    auxiliaryLink: false
  }<?php 
$parent=5;
include "sru_file_sell.php";
 ?>
  nodeType: ConversationNodeType_Simple
}
roots {
  responseText: ""
  nextNodeIndex: 0
}
