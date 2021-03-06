idRef {
  id: "52463d78336331cc13003c03"
}
ui_name: "Rosco"
nodes {
  idRef {
    id: "52463f34336331cc13003c2f"
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
              string_value: "MetRosco"
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
    responseText: "OK, Rosco. I wanna make a deal."
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
              string_value: "MetRosco"
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
      ops {
        functionName: "Evaluate If Team Has Cyberdeck"
        args {
          call_value {
            functionName: "Get Preset Value (string)"
            args {
              string_value: "FactionList"
            }
            args {
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "HasOrHasNot"
            }
            args {
              int_value: 1
            }
          }
        }
        args {
          call_value {
            functionName: "Get Map Item (SceneDimension)"
            args {
              string_value: "Default"
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
    id: "52463f34336331cc13003c32"
  }
  index: 1
  text: "Hello chummer, would you care to see my wares?"
  branches {
    responseText: "Sorry, but I have no interest in trinkets and knickknacks."
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
            string_value: "MetRosco"
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
    id: "52463f34336331cc13003c35"
  }
  index: 2
  text: "Well perhaps YOU have something for sale? Maybe something a little exotic?"
  branches {
    responseText: "What are you getting at?"
    nextNodeIndex: 3
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52463f34336331cc13003c38"
  }
  index: 3
  text: "Subtlety be damned. I\'m a data fence, and I can tell you\'re a \'runner. Don\'t know if you\'re much of a decker, but I\'m willing to purchase any interesting data files that you may come across."
  branches {
    responseText: "Hmm. I\'ll keep that in mind."
    nextNodeIndex: 4
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52463706336331cc13003cfe"
  }
  index: 4
  text: "Please do."
  branches {
    responseText: ""
    nextNodeIndex: 0
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "52463fb5336331cc13003c85"
  }
  index: 5
  text: "Well let\'s just plug you deck in and have a look, shall we?"
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
