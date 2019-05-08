$(function () {
    // Fix line indenting in code snippets
    $('pre code').each(function () {
        var lines = $(this).text().split('\n');
        var indent = 2;
        var line1Indent = lines[1].match(/^\s+/);
        if (lines.length > 3) {
            for (var i = 1; i < lines.length; i++) {
                var lineIndent = lines[i].match(/^\s+/);
                if (lineIndent != null) {
                    if (lineIndent[0].length != line1Indent[0].length) {
                        indent = lineIndent[0].length - line1Indent[0].length;
                        break;
                    }
                }
            }
        }
        lines = lines.map(function (line) {
            return line.substring(line1Indent[0].length - indent, line.length);
        });
        $(this).text(lines.join('\n'));
    });

    var customMessagesForm = $('#customMessagesForm');

    // Custom Messages
    customMessagesForm.bsValidate({
        fields: {
            name: {
                required: {
                    helpText: "Please enter your name.",
                    alert: "You are required to enter your name."
                }
            },
            email: {
                required: {
                    helpText: "Please enter your email.",
                    alert: "You are required to enter your email."
                },
                email: {
                    helpText: "This doesn't look like a valid email.",
                    alert: "Please enter a valid email address."
                }
            },
            emailConfirm: {
                required: {
                    helpText: "Please confirm your email.",
                    alert: "You are required to confirm your email.",
                    dependency: {
                        isNotBlank: 'email'
                    }
                },
                match: {
                    field: "email",
                    helpText: "Oops. That doesn't match!",
                    alert: "It doesn't look like the two email addresses match."
                }
            },
            website: {
                regex: {
                    pattern: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/g,
                    helpText: "This doesn't look like a real URL",
                    alert: "Please enter an actual website address."
                }
            }
        },
        before: function () {
            customMessagesForm.find('.alert').remove();
        },
        success: function (e) {
            e.preventDefault();
            alert('Success!');
        }
    });

    var atLeastOneForm = $('#atLeastOneForm');

    // Custom Messages
    atLeastOneForm.bsValidate({
        fields: {
            field1: {
                regex: {
                    pattern: /^[a-zA-Z_\s]+$/,
                    helpText: "Ingrese nombre y apellido (solo letras)",
                },
                required:{
                    helpText: "Ingrese nombre y apellido",
                    alert: "LLene los campos requeridos",
                    dependency: {
                        isBlank: 'field2,field3'
                    }   
                    
                }
            },
            field2: {
                required: {
                    helpText: "Ingrese usuario",
                    dependency: {
                        isBlank: 'field3,field1'
                    }
                }
            },
            field3: {
                regex:{
                    pattern: /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,
                    helpText: "Ingrese correo (correo@dominio.com)",
                },
                required: {
                    helpText: "Ingrese correo",
                    dependency: {
                        isBlank: 'field1,field2'
                    }
                }
            },

        },
        before: function () {
            customMessagesForm.find('.alert').remove();
        },
        success: function (e) {
            e.preventDefault();
            var atLeastOneForm = $('#atLeastOneForm');

        }

     });

    var atLeastOneForm2 = $('#atLeastOneForm2');

    // Custom Messages
    atLeastOneForm2.bsValidate({
        fields: {
            field1: {
                regex: {
                    pattern: /^[a-zA-Z_\s]+$/,
                    helpText: "Ingrese nombre y apellido (solo letras)",
                },
                required: {
                    helpText: "Ingrese nombre y apellido",
                    alert: "LLene los campos requeridos",
                    dependency: {
                        isBlank: 'field2,field3,field4'
                    }

                }
            },
            field2: {
                required: {
                    helpText: "Ingrese usuario",
                    dependency: {
                        isBlank: 'field3,field4,field1'
                    }
                }
            },
            field3: {
                required: {
                    helpText: "Ingrese usuario",
                    dependency: {
                        isBlank: 'field4,field1,field2'
                    }
                }

            },
            field4: {
                regex: {
                    pattern: /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,
                    helpText: "Ingrese correo (correo@dominio.com)",
                },
                required: {
                    helpText: "Ingrese correo",
                    dependency: {
                        isBlank: 'field1,field2,field3'
                    }
                }
            },

        },
        before: function () {
            customMessagesForm.find('.alert').remove();
        },
        success: function (e) {
            e.preventDefault();
            var atLeastOneForm2 = $('#atLeastOneForm2');

        }

    });

    var atLeastOneForm4 = $('#atLeastOneForm4');

    // Custom Messages
    atLeastOneForm4.bsValidate({
        fields: {
            field1: {
                required: {
                    helpText: "Ingrese Detalle",
                    alert: "LLene los campos requeridos",
                }

            },
          
        },
        before: function () {
            customMessagesForm.find('.alert').remove();
        },
        success: function (e) {
            e.preventDefault();
            var atLeastOneForm4 = $('#atLeastOneForm4');

           
        }

    });

    var atLeastOneForm5 = $('#atLeastOneForm5');

    // Custom Messages
    atLeastOneForm5.bsValidate({
        fields: {
            pass: {
                regex: {
                    pattern: /^[A-Za-z0-9]{6}/,
                    helpText: "Minimo 6 caracteres",
                },
                required: {
                    helpText: "Ingrese Contraseña",
                    alert: "LLene los campos requeridos",
                    dependency: {
                        isBlank: 'confirpass'
                    }
                }
                

            },
            confirpass: {
                required: {
                    helpText: "Confirme Contraseña",
                    dependency: {
                        isBlank: 'pass'
                    }
                    
                },
                match: {
                    field: "pass",
                    helpText: "Las contraseñas no coinciden",
                }
                
            },
        },
        before: function () {
            customMessagesForm.find('.alert').remove();
        },
        success: function (e) {
            e.preventDefault();
            var atLeastOneForm5 = $('#atLeastOneForm5');


        }

    });


});

