$(function () {
    'use strict';

    var tipoDocumento = $("#divTipoDocumento");
    var nomeRazaoSocial = $("#divNomeRazaoSocial");
    var nomeFantasia = $("#divNomeFantasia");
    var nomeTel = $("#divNomeTel");

    tipoDocumento.hide();
    nomeRazaoSocial.hide();
    nomeFantasia.hide();
    nomeTel.hide();

    $(document).on('click', 'input[type=radio]', function () {
        var id = $(this).prop('id');
        mostrarInput(id);
    });

    function mostrarInput(id) {
        switch (id) {
            case 'pf':
                $('#divTipoDocumento label').text('CPF');
                $('#divTipoDocumento label').prop('for', 'cpf');
                $('#divTipoDocumento input').prop('name', 'cpf')
                    .prop('id', 'cpf')
                    .mask('000.000.000-00');

                tipoDocumento.show();
                $('#divNomeRazaoSocial label').text('Nome')
                    .prop('for', 'nome');
                $('#divNomeRazaoSocial input').prop('name', 'nome')
                    .prop('id', 'nome');

                nomeRazaoSocial.show();
                nomeFantasia.hide();

                break;
            case 'pj':
                $('#divTipoDocumento label').text('CNPJ');
                $('#divTipoDocumento label').prop('for', 'cnpj');
                $('#divTipoDocumento input').prop('name', 'cnpj')
                    .prop('id', 'cnpj')
                    .mask('00.000.000/0000-00');

                tipoDocumento.show();
                $('#divNomeRazaoSocial label').text('Razão Social');
                $('#divNomeRazaoSocial label').prop('for', 'razaoSocial');
                $('#divNomeRazaoSocial input').prop('name', 'razaoSocial');
                $('#divNomeRazaoSocial input').prop('id', 'razaoSocial');
                nomeRazaoSocial.show();

                $('#divNomeFantasia label').text('Nome Fantasia');
                $('#divNomeFantasia label').prop('for', 'nomeFantasia');
                $('#divNomeFantasia input').prop('name', 'nomeFantasia');
                $('#divNomeFantasia input').prop('id', 'nomeFantasial');

                nomeTel.show();

                $('#divNomeTel label').text('Nome Tel');
                $('#divNomeTel label').prop('for', 'nomeTel');
                $('#divNomeTel input').prop('name', 'nomeTel');
                $('#divNomeTel input').prop('id', 'nomeTel');

                nomeTel.show();

                break;
            default:
                break;
        }
    }
});

