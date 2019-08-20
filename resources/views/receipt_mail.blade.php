<html>
    <head>
        <style>
        a.text-primary:hover,
        a.text-primary:focus {
        color: #7b7b7b;
        }
        a.text-success:hover,
        a.text-success:focus {
        color: #022501;
        }
        a.text-info:hover,
        a.text-info:focus {
        color: #215f79;
        }
        a.text-warning:hover,
        a.text-warning:focus {
        color: #251f01;
        }
        a.text-danger:hover,
        a.text-danger:focus {
        color: #7f1212;
        }
        a.bg-primary:hover,
        a.bg-primary:focus {
        background-color: #7b7b7b;
        }
        a.bg-success:hover,
        a.bg-success:focus {
        background-color: #95e294;
        }
        a.bg-info:hover,
        a.bg-info:focus {
        background-color: #98d6f1;
        }
        a.bg-warning:hover,
        a.bg-warning:focus {
        background-color: #ffe671;
        }
        a.bg-danger:hover,
        a.bg-danger:focus {
        background-color: #ff9696;
        }
        .table > thead > tr > td.active,
        .table > tbody > tr > td.active,
        .table > tfoot > tr > td.active,
        .table > thead > tr > th.active,
        .table > tbody > tr > th.active,
        .table > tfoot > tr > th.active,
        .table > thead > tr.active > td,
        .table > tbody > tr.active > td,
        .table > tfoot > tr.active > td,
        .table > thead > tr.active > th,
        .table > tbody > tr.active > th,
        .table > tfoot > tr.active > th {
        background-color: #f5f5f5;
        }
        .table-hover > tbody > tr > td.active:hover,
        .table-hover > tbody > tr > th.active:hover,
        .table-hover > tbody > tr.active:hover > td,
        .table-hover > tbody > tr:hover > .active,
        .table-hover > tbody > tr.active:hover > th {
        background-color: #e8e8e8;
        }
        .table > thead > tr > td.success,
        .table > tbody > tr > td.success,
        .table > tfoot > tr > td.success,
        .table > thead > tr > th.success,
        .table > tbody > tr > th.success,
        .table > tfoot > tr > th.success,
        .table > thead > tr.success > td,
        .table > tbody > tr.success > td,
        .table > tfoot > tr.success > td,
        .table > thead > tr.success > th,
        .table > tbody > tr.success > th,
        .table > tfoot > tr.success > th {
        background-color: #bdedbc;
        }
        .table-hover > tbody > tr > td.success:hover,
        .table-hover > tbody > tr > th.success:hover,
        .table-hover > tbody > tr.success:hover > td,
        .table-hover > tbody > tr:hover > .success,
        .table-hover > tbody > tr.success:hover > th {
        background-color: #a9e8a8;
        }
        .table > thead > tr > td.info,
        .table > tbody > tr > td.info,
        .table > tfoot > tr > td.info,
        .table > thead > tr > th.info,
        .table > tbody > tr > th.info,
        .table > tfoot > tr > th.info,
        .table > thead > tr.info > td,
        .table > tbody > tr.info > td,
        .table > tfoot > tr.info > td,
        .table > thead > tr.info > th,
        .table > tbody > tr.info > th,
        .table > tfoot > tr.info > th {
        background-color: #c5e8f7;
        }
        .table-hover > tbody > tr > td.info:hover,
        .table-hover > tbody > tr > th.info:hover,
        .table-hover > tbody > tr.info:hover > td,
        .table-hover > tbody > tr:hover > .info,
        .table-hover > tbody > tr.info:hover > th {
        background-color: #afdff4;
        }
        .table > thead > tr > td.warning,
        .table > tbody > tr > td.warning,
        .table > tfoot > tr > td.warning,
        .table > thead > tr > th.warning,
        .table > tbody > tr > th.warning,
        .table > tfoot > tr > th.warning,
        .table > thead > tr.warning > td,
        .table > tbody > tr.warning > td,
        .table > tfoot > tr.warning > td,
        .table > thead > tr.warning > th,
        .table > tbody > tr.warning > th,
        .table > tfoot > tr.warning > th {
        background-color: #ffefa4;
        }
        .table-hover > tbody > tr > td.warning:hover,
        .table-hover > tbody > tr > th.warning:hover,
        .table-hover > tbody > tr.warning:hover > td,
        .table-hover > tbody > tr:hover > .warning,
        .table-hover > tbody > tr.warning:hover > th {
        background-color: #ffeb8a;
        }
        .table > thead > tr > td.danger,
        .table > tbody > tr > td.danger,
        .table > tfoot > tr > td.danger,
        .table > thead > tr > th.danger,
        .table > tbody > tr > th.danger,
        .table > tfoot > tr > th.danger,
        .table > thead > tr.danger > td,
        .table > tbody > tr.danger > td,
        .table > tfoot > tr.danger > td,
        .table > thead > tr.danger > th,
        .table > tbody > tr.danger > th,
        .table > tfoot > tr.danger > th {
        background-color: #ffc9c9;
        }
        .table-hover > tbody > tr > td.danger:hover,
        .table-hover > tbody > tr > th.danger:hover,
        .table-hover > tbody > tr.danger:hover > td,
        .table-hover > tbody > tr:hover > .danger,
        .table-hover > tbody > tr.danger:hover > th {
        background-color: #ffafaf;
        }
        .form-control:focus {
        border-color: #cbd0d9;
        outline: 0;
        -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(203, 208, 217, 0.6);
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(203, 208, 217, 0.6);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(203, 208, 217, 0.6);
        }
        .form-control::-webkit-input-placeholder {
        color: #aaa;
        }
        .form-control:-moz-placeholder {
        color: #aaa;
        }
        .form-control::-moz-placeholder {
        color: #aaa;
        }
        .form-control:-ms-input-placeholder {
        color: #aaa;
        }
        .form-control::-moz-placeholder {
        color: #999999;
        opacity: 1;
        }
        .form-control:-ms-input-placeholder {
        color: #999999;
        }
        .form-control::-webkit-input-placeholder {
        color: #999999;
        }
        select.input-sm {
        height: 28px;
        line-height: 28px;
        }
        textarea.input-sm,
        select[multiple].input-sm {
        height: auto;
        }
        select.input-lg {
        height: 42px;
        line-height: 42px;
        }
        textarea.input-lg,
        select[multiple].input-lg {
        height: auto;
        }
        .has-success .help-block,
        .has-success .control-label,
        .has-success .radio,
        .has-success .checkbox,
        .has-success .radio-inline,
        .has-success .checkbox-inline,
        .has-success.radio label,
        .has-success.checkbox label,
        .has-success.radio-inline label,
        .has-success.checkbox-inline label {
        color: #045702;
        }
        .has-success .form-control {
        border-color: #045702;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
        .has-success .form-control:focus {
        border-color: #022501;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #09bb04;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #09bb04;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #09bb04;
        }
        .has-success .input-group-addon {
        color: #045702;
        border-color: #045702;
        background-color: #bdedbc;
        }
        .has-success .form-control-feedback {
        color: #045702;
        }
        .has-warning .help-block,
        .has-warning .control-label,
        .has-warning .radio,
        .has-warning .checkbox,
        .has-warning .radio-inline,
        .has-warning .checkbox-inline,
        .has-warning.radio label,
        .has-warning.checkbox label,
        .has-warning.radio-inline label,
        .has-warning.checkbox-inline label {
        color: #574802;
        }
        .has-warning .form-control {
        border-color: #574802;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
        .has-warning .form-control:focus {
        border-color: #251f01;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #bb9b04;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #bb9b04;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #bb9b04;
        }
        .has-warning .input-group-addon {
        color: #574802;
        border-color: #574802;
        background-color: #ffefa4;
        }
        .has-warning .form-control-feedback {
        color: #574802;
        }
        .has-error .help-block,
        .has-error .control-label,
        .has-error .radio,
        .has-error .checkbox,
        .has-error .radio-inline,
        .has-error .checkbox-inline,
        .has-error.radio label,
        .has-error.checkbox label,
        .has-error.radio-inline label,
        .has-error.checkbox-inline label {
        color: #ac1818;
        }
        .has-error .form-control {
        border-color: #ac1818;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
        .has-error .form-control:focus {
        border-color: #7f1212;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #e54545;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #e54545;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #e54545;
        }
        .has-error .input-group-addon {
        color: #ac1818;
        border-color: #ac1818;
        background-color: #ffc9c9;
        }
        .has-error .form-control-feedback {
        color: #ac1818;
        }
        .btn-default:focus,
        .btn-default.focus {
        color: #303641;
        background-color: #d6d6d8;
        border-color: #aeaeb3;
        }
        .btn-default:hover {
        color: #303641;
        background-color: #d6d6d8;
        border-color: #d0d0d3;
        }
        .btn-default:active,
        .btn-default.active,
        .open > .dropdown-toggle.btn-default {
        color: #303641;
        background-color: #d6d6d8;
        border-color: #d0d0d3;
        }
        .btn-default:active:hover,
        .btn-default.active:hover,
        .open > .dropdown-toggle.btn-default:hover,
        .btn-default:active:focus,
        .btn-default.active:focus,
        .open > .dropdown-toggle.btn-default:focus,
        .btn-default:active.focus,
        .btn-default.active.focus,
        .open > .dropdown-toggle.btn-default.focus {
        color: #303641;
        background-color: #c3c3c7;
        border-color: #aeaeb3;
        }
        .btn-default:active,
        .btn-default.active,
        .open > .dropdown-toggle.btn-default {
        background-image: none;
        }
        .btn-default.disabled:hover,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default:hover,
        .btn-default.disabled:focus,
        .btn-default[disabled]:focus,
        fieldset[disabled] .btn-default:focus,
        .btn-default.disabled.focus,
        .btn-default[disabled].focus,
        fieldset[disabled] .btn-default.focus {
        background-color: #f0f0f1;
        border-color: #f0f0f1;
        }
        .btn-default .badge {
        color: #f0f0f1;
        background-color: #303641;
        }
        .btn-default:hover,
        .btn-default:focus,
        .btn-default.focus {
        color: #303641 !important;
        }
        .btn-default.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-default.btn-icon i {
        background-color: #dbdbdd;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-default.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-default.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-default.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-default.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-default.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-default.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-default.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-default.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-default.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-default.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-default.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-primary:focus,
        .btn-primary.focus {
        color: #fff;
        background-color: #1a1e24;
        border-color: #000000;
        }
        .btn-primary:hover {
        color: #fff;
        background-color: #1a1e24;
        border-color: #0b0d0f;
        }
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #1a1e24;
        border-color: #0b0d0f;
        }
        .btn-primary:active:hover,
        .btn-primary.active:hover,
        .open > .dropdown-toggle.btn-primary:hover,
        .btn-primary:active:focus,
        .btn-primary.active:focus,
        .open > .dropdown-toggle.btn-primary:focus,
        .btn-primary:active.focus,
        .btn-primary.active.focus,
        .open > .dropdown-toggle.btn-primary.focus {
        color: #fff;
        background-color: #0b0d0f;
        border-color: #000000;
        }
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
        background-image: none;
        }
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus {
        background-color: #303641;
        border-color: #252a32;
        }
        .btn-primary .badge {
        color: #303641;
        background-color: #fff;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus {
        color: #fff !important;
        }
        .btn-primary.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-primary.btn-icon i {
        background-color: #1f232a;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-primary.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-primary.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-primary.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-primary.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-primary.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-primary.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-primary.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-primary.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-primary.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-primary.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-primary.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-success:focus,
        .btn-success.focus {
        color: #fff;
        background-color: #007338;
        border-color: #000d06;
        }
        .btn-success:hover {
        color: #fff;
        background-color: #007338;
        border-color: #004f27;
        }
        .btn-success:active,
        .btn-success.active,
        .open > .dropdown-toggle.btn-success {
        color: #fff;
        background-color: #007338;
        border-color: #004f27;
        }
        .btn-success:active:hover,
        .btn-success.active:hover,
        .open > .dropdown-toggle.btn-success:hover,
        .btn-success:active:focus,
        .btn-success.active:focus,
        .open > .dropdown-toggle.btn-success:focus,
        .btn-success:active.focus,
        .btn-success.active.focus,
        .open > .dropdown-toggle.btn-success.focus {
        color: #fff;
        background-color: #004f27;
        border-color: #000d06;
        }
        .btn-success:active,
        .btn-success.active,
        .open > .dropdown-toggle.btn-success {
        background-image: none;
        }
        .btn-success.disabled:hover,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success:hover,
        .btn-success.disabled:focus,
        .btn-success[disabled]:focus,
        fieldset[disabled] .btn-success:focus,
        .btn-success.disabled.focus,
        .btn-success[disabled].focus,
        fieldset[disabled] .btn-success.focus {
        background-color: #00a651;
        border-color: #008d45;
        }
        .btn-success .badge {
        color: #00a651;
        background-color: #fff;
        }
        .btn-success:hover,
        .btn-success:focus,
        .btn-success.focus {
        color: #fff !important;
        }
        .btn-success.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-success.btn-icon i {
        background-color: #007d3d;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-success.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-success.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-success.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-success.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-success.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-success.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-success.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-success.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-success.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-success.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-success.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-info:focus,
        .btn-info.focus {
        color: #fff;
        background-color: #1988b6;
        border-color: #0c455d;
        }
        .btn-info:hover {
        color: #fff;
        background-color: #1988b6;
        border-color: #147197;
        }
        .btn-info:active,
        .btn-info.active,
        .open > .dropdown-toggle.btn-info {
        color: #fff;
        background-color: #1988b6;
        border-color: #147197;
        }
        .btn-info:active:hover,
        .btn-info.active:hover,
        .open > .dropdown-toggle.btn-info:hover,
        .btn-info:active:focus,
        .btn-info.active:focus,
        .open > .dropdown-toggle.btn-info:focus,
        .btn-info:active.focus,
        .btn-info.active.focus,
        .open > .dropdown-toggle.btn-info.focus {
        color: #fff;
        background-color: #147197;
        border-color: #0c455d;
        }
        .btn-info:active,
        .btn-info.active,
        .open > .dropdown-toggle.btn-info {
        background-image: none;
        }
        .btn-info.disabled:hover,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info:hover,
        .btn-info.disabled:focus,
        .btn-info[disabled]:focus,
        fieldset[disabled] .btn-info:focus,
        .btn-info.disabled.focus,
        .btn-info[disabled].focus,
        fieldset[disabled] .btn-info.focus {
        background-color: #21a9e1;
        border-color: #1c99cd;
        }
        .btn-info .badge {
        color: #21a9e1;
        background-color: #fff;
        }
        .btn-info:hover,
        .btn-info:focus,
        .btn-info.focus {
        color: #fff !important;
        }
        .btn-info.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-info.btn-icon i {
        background-color: #1a8fbf;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-info.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-info.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-info.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-info.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-info.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-info.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-info.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-info.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-info.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-info.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-info.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-warning:focus,
        .btn-warning.focus {
        color: #fff;
        background-color: #f9ce07;
        border-color: #967c04;
        }
        .btn-warning:hover {
        color: #fff;
        background-color: #f9ce07;
        border-color: #d7b205;
        }
        .btn-warning:active,
        .btn-warning.active,
        .open > .dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #f9ce07;
        border-color: #d7b205;
        }
        .btn-warning:active:hover,
        .btn-warning.active:hover,
        .open > .dropdown-toggle.btn-warning:hover,
        .btn-warning:active:focus,
        .btn-warning.active:focus,
        .open > .dropdown-toggle.btn-warning:focus,
        .btn-warning:active.focus,
        .btn-warning.active.focus,
        .open > .dropdown-toggle.btn-warning.focus {
        color: #fff;
        background-color: #d7b205;
        border-color: #967c04;
        }
        .btn-warning:active,
        .btn-warning.active,
        .open > .dropdown-toggle.btn-warning {
        background-image: none;
        }
        .btn-warning.disabled:hover,
        .btn-warning[disabled]:hover,
        fieldset[disabled] .btn-warning:hover,
        .btn-warning.disabled:focus,
        .btn-warning[disabled]:focus,
        fieldset[disabled] .btn-warning:focus,
        .btn-warning.disabled.focus,
        .btn-warning[disabled].focus,
        fieldset[disabled] .btn-warning.focus {
        background-color: #fad839;
        border-color: #f9d320;
        }
        .btn-warning .badge {
        color: #fad839;
        background-color: #fff;
        }
        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning.focus {
        color: #fff !important;
        }
        .btn-warning.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-warning.btn-icon i {
        background-color: #f9d011;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-warning.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-warning.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-warning.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-warning.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-warning.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-warning.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-warning.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-warning.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-warning.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-warning.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-warning.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-danger:focus,
        .btn-danger.focus {
        color: #fff;
        background-color: #a11c1c;
        border-color: #4a0d0d;
        }
        .btn-danger:hover {
        color: #fff;
        background-color: #a11c1c;
        border-color: #821717;
        }
        .btn-danger:active,
        .btn-danger.active,
        .open > .dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #a11c1c;
        border-color: #821717;
        }
        .btn-danger:active:hover,
        .btn-danger.active:hover,
        .open > .dropdown-toggle.btn-danger:hover,
        .btn-danger:active:focus,
        .btn-danger.active:focus,
        .open > .dropdown-toggle.btn-danger:focus,
        .btn-danger:active.focus,
        .btn-danger.active.focus,
        .open > .dropdown-toggle.btn-danger.focus {
        color: #fff;
        background-color: #821717;
        border-color: #4a0d0d;
        }
        .btn-danger:active,
        .btn-danger.active,
        .open > .dropdown-toggle.btn-danger {
        background-image: none;
        }
        .btn-danger.disabled:hover,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger:hover,
        .btn-danger.disabled:focus,
        .btn-danger[disabled]:focus,
        fieldset[disabled] .btn-danger:focus,
        .btn-danger.disabled.focus,
        .btn-danger[disabled].focus,
        fieldset[disabled] .btn-danger.focus {
        background-color: #cc2424;
        border-color: #b62020;
        }
        .btn-danger .badge {
        color: #cc2424;
        background-color: #fff;
        }
        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger.focus {
        color: #fff !important;
        }
        .btn-danger.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-danger.btn-icon i {
        background-color: #a91e1e;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-danger.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-danger.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-danger.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-danger.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-danger.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-danger.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-danger.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-danger.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-danger.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-danger.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-danger.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn {
        outline: 0 !important;
        }
        .btn:active {
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        }
        .btn.btn-icon {
        position: relative;
        }
        .btn.btn-icon i {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        }
        .btn-default {
        color: #303641;
        background-color: #f0f0f1;
        border-color: #f0f0f1;
        }
        .btn-default:focus,
        .btn-default.focus {
        color: #303641;
        background-color: #d6d6d8;
        border-color: #aeaeb3;
        }
        .btn-default:hover {
        color: #303641;
        background-color: #d6d6d8;
        border-color: #d0d0d3;
        }
        .btn-default:active,
        .btn-default.active,
        .open > .dropdown-toggle.btn-default {
        color: #303641;
        background-color: #d6d6d8;
        border-color: #d0d0d3;
        }
        .btn-default:active:hover,
        .btn-default.active:hover,
        .open > .dropdown-toggle.btn-default:hover,
        .btn-default:active:focus,
        .btn-default.active:focus,
        .open > .dropdown-toggle.btn-default:focus,
        .btn-default:active.focus,
        .btn-default.active.focus,
        .open > .dropdown-toggle.btn-default.focus {
        color: #303641;
        background-color: #c3c3c7;
        border-color: #aeaeb3;
        }
        .btn-default:active,
        .btn-default.active,
        .open > .dropdown-toggle.btn-default {
        background-image: none;
        }
        .btn-default.disabled:hover,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default:hover,
        .btn-default.disabled:focus,
        .btn-default[disabled]:focus,
        fieldset[disabled] .btn-default:focus,
        .btn-default.disabled.focus,
        .btn-default[disabled].focus,
        fieldset[disabled] .btn-default.focus {
        background-color: #f0f0f1;
        border-color: #f0f0f1;
        }
        .btn-default .badge {
        color: #f0f0f1;
        background-color: #303641;
        }
        .btn-default:hover,
        .btn-default:focus,
        .btn-default.focus {
        color: #303641 !important;
        }
        .btn-default.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-default.btn-icon i {
        background-color: #dbdbdd;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-default.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-default.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-default.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-default.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-default.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-default.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-default.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-default.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-default.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-default.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-default.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-primary {
        color: #fff;
        background-color: #303641;
        border-color: #252a32;
        }
        .btn-primary:focus,
        .btn-primary.focus {
        color: #fff;
        background-color: #1a1e24;
        border-color: #000000;
        }
        .btn-primary:hover {
        color: #fff;
        background-color: #1a1e24;
        border-color: #0b0d0f;
        }
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #1a1e24;
        border-color: #0b0d0f;
        }
        .btn-primary:active:hover,
        .btn-primary.active:hover,
        .open > .dropdown-toggle.btn-primary:hover,
        .btn-primary:active:focus,
        .btn-primary.active:focus,
        .open > .dropdown-toggle.btn-primary:focus,
        .btn-primary:active.focus,
        .btn-primary.active.focus,
        .open > .dropdown-toggle.btn-primary.focus {
        color: #fff;
        background-color: #0b0d0f;
        border-color: #000000;
        }
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
        background-image: none;
        }
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus {
        background-color: #303641;
        border-color: #252a32;
        }
        .btn-primary .badge {
        color: #303641;
        background-color: #fff;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus {
        color: #fff !important;
        }
        .btn-primary.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-primary.btn-icon i {
        background-color: #1f232a;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-primary.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-primary.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-primary.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-primary.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-primary.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-primary.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-primary.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-primary.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-primary.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-primary.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-primary.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-blue {
        color: #FFF;
        background-color: #0072bc;
        border-color: #0072bc;
        }
        .btn-blue:focus,
        .btn-blue.focus {
        color: #FFF;
        background-color: #005389;
        border-color: #00253d;
        }
        .btn-blue:hover {
        color: #FFF;
        background-color: #005389;
        border-color: #004d7f;
        }
        .btn-blue:active,
        .btn-blue.active,
        .open > .dropdown-toggle.btn-blue {
        color: #FFF;
        background-color: #005389;
        border-color: #004d7f;
        }
        .btn-blue:active:hover,
        .btn-blue.active:hover,
        .open > .dropdown-toggle.btn-blue:hover,
        .btn-blue:active:focus,
        .btn-blue.active:focus,
        .open > .dropdown-toggle.btn-blue:focus,
        .btn-blue:active.focus,
        .btn-blue.active.focus,
        .open > .dropdown-toggle.btn-blue.focus {
        color: #FFF;
        background-color: #003d65;
        border-color: #00253d;
        }
        .btn-blue:active,
        .btn-blue.active,
        .open > .dropdown-toggle.btn-blue {
        background-image: none;
        }
        .btn-blue.disabled:hover,
        .btn-blue[disabled]:hover,
        fieldset[disabled] .btn-blue:hover,
        .btn-blue.disabled:focus,
        .btn-blue[disabled]:focus,
        fieldset[disabled] .btn-blue:focus,
        .btn-blue.disabled.focus,
        .btn-blue[disabled].focus,
        fieldset[disabled] .btn-blue.focus {
        background-color: #0072bc;
        border-color: #0072bc;
        }
        .btn-blue .badge {
        color: #0072bc;
        background-color: #FFF;
        }
        .btn-blue:hover,
        .btn-blue:focus,
        .btn-blue.focus {
        color: #FFF !important;
        }
        .btn-blue.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-blue.btn-icon i {
        background-color: #005993;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-blue.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-blue.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-blue.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-blue.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-blue.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-blue.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-blue.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-blue.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-blue.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-blue.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-blue.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-red {
        color: #FFF;
        background-color: #d42020;
        border-color: #d42020;
        }
        .btn-red:focus,
        .btn-red.focus {
        color: #FFF;
        background-color: #a81919;
        border-color: #650f0f;
        }
        .btn-red:hover {
        color: #FFF;
        background-color: #a81919;
        border-color: #9f1818;
        }
        .btn-red:active,
        .btn-red.active,
        .open > .dropdown-toggle.btn-red {
        color: #FFF;
        background-color: #a81919;
        border-color: #9f1818;
        }
        .btn-red:active:hover,
        .btn-red.active:hover,
        .open > .dropdown-toggle.btn-red:hover,
        .btn-red:active:focus,
        .btn-red.active:focus,
        .open > .dropdown-toggle.btn-red:focus,
        .btn-red:active.focus,
        .btn-red.active.focus,
        .open > .dropdown-toggle.btn-red.focus {
        color: #FFF;
        background-color: #891515;
        border-color: #650f0f;
        }
        .btn-red:active,
        .btn-red.active,
        .open > .dropdown-toggle.btn-red {
        background-image: none;
        }
        .btn-red.disabled:hover,
        .btn-red[disabled]:hover,
        fieldset[disabled] .btn-red:hover,
        .btn-red.disabled:focus,
        .btn-red[disabled]:focus,
        fieldset[disabled] .btn-red:focus,
        .btn-red.disabled.focus,
        .btn-red[disabled].focus,
        fieldset[disabled] .btn-red.focus {
        background-color: #d42020;
        border-color: #d42020;
        }
        .btn-red .badge {
        color: #d42020;
        background-color: #FFF;
        }
        .btn-red:hover,
        .btn-red:focus,
        .btn-red.focus {
        color: #FFF !important;
        }
        .btn-red.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-red.btn-icon i {
        background-color: #b11b1b;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-red.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-red.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-red.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-red.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-red.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-red.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-red.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-red.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-red.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-red.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-red.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-orange {
        color: #FFF;
        background-color: #ff9600;
        border-color: #ff9600;
        }
        .btn-orange:focus,
        .btn-orange.focus {
        color: #FFF;
        background-color: #cc7800;
        border-color: #804b00;
        }
        .btn-orange:hover {
        color: #FFF;
        background-color: #cc7800;
        border-color: #c27200;
        }
        .btn-orange:active,
        .btn-orange.active,
        .open > .dropdown-toggle.btn-orange {
        color: #FFF;
        background-color: #cc7800;
        border-color: #c27200;
        }
        .btn-orange:active:hover,
        .btn-orange.active:hover,
        .open > .dropdown-toggle.btn-orange:hover,
        .btn-orange:active:focus,
        .btn-orange.active:focus,
        .open > .dropdown-toggle.btn-orange:focus,
        .btn-orange:active.focus,
        .btn-orange.active.focus,
        .open > .dropdown-toggle.btn-orange.focus {
        color: #FFF;
        background-color: #a86300;
        border-color: #804b00;
        }
        .btn-orange:active,
        .btn-orange.active,
        .open > .dropdown-toggle.btn-orange {
        background-image: none;
        }
        .btn-orange.disabled:hover,
        .btn-orange[disabled]:hover,
        fieldset[disabled] .btn-orange:hover,
        .btn-orange.disabled:focus,
        .btn-orange[disabled]:focus,
        fieldset[disabled] .btn-orange:focus,
        .btn-orange.disabled.focus,
        .btn-orange[disabled].focus,
        fieldset[disabled] .btn-orange.focus {
        background-color: #ff9600;
        border-color: #ff9600;
        }
        .btn-orange .badge {
        color: #ff9600;
        background-color: #FFF;
        }
        .btn-orange:hover,
        .btn-orange:focus,
        .btn-orange.focus {
        color: #FFF !important;
        }
        .btn-orange.btn-icon {
        position: relative;
        padding-right: 39px;
        border: none;
        }
        .btn-orange.btn-icon i {
        background-color: #d67e00;
        padding: 6px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 3px;
        -webkit-border-radius: 0 3px 3px 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0 3px 3px 0;
        -moz-background-clip: padding;
        border-radius: 0 3px 3px 0;
        background-clip: padding-box;
        }
        .btn-orange.btn-icon.icon-left {
        padding-right: 12px;
        padding-left: 39px;
        }
        .btn-orange.btn-icon.icon-left i {
        float: left;
        right: auto;
        left: 0;
        -webkit-border-radius: 3px 0 0 3px !important;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px 0 0 3px !important;
        -moz-background-clip: padding;
        border-radius: 3px 0 0 3px !important;
        background-clip: padding-box;
        }
        .btn-orange.btn-icon.btn-lg {
        padding-right: 55px;
        }
        .btn-orange.btn-icon.btn-lg.icon-left {
        padding-right: 16px;
        padding-left: 55px;
        }
        .btn-orange.btn-icon.btn-lg i {
        padding: 10px 10px;
        font-size: 15px;
        line-height: 1.3333333;
        border-radius: 3px;
        }
        .btn-orange.btn-icon.btn-sm {
        padding-right: 36px;
        }
        .btn-orange.btn-icon.btn-sm.icon-left {
        padding-right: 10px;
        padding-left: 36px;
        }
        .btn-orange.btn-icon.btn-sm i {
        padding: 5px 6px;
        font-size: 11px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-orange.btn-icon.btn-xs {
        padding-right: 32px;
        }
        .btn-orange.btn-icon.btn-xs.icon-left {
        padding-right: 10px;
        padding-left: 32px;
        }
        .btn-orange.btn-icon.btn-xs i {
        padding: 2px 6px;
        font-size: 10px;
        line-height: 1.5;
        border-radius: 2px;
        }
        .btn-gold {
        color: #846e20;
        background-color: #fcd036;
        border-color: #fcd036;
        }
        .btn-gold:focus,
        .btn-gold.focus {
        color: #846e20;
        background-color: #fbc404;
        border-color: #b08903;
        }
        .btn-gold:hover {
        color: #846e20;
        background-color: #fbc404;
        border-color: #f1bc04;
        }
        .btn-gold:active,
        .btn-gold.active,
        .open > .dropdown-toggle.btn-gold {
        color: #846e20;
        background-color: #fbc404;
        border-color: #f1bc04;
        }
        .btn-gold:active:hover,
        .btn-gold.active:hover,
        .open > .dropdown-toggle.btn-gold:hover,
        .btn-gold:active:focus,
        .btn-gold.active:focus,
        .open > .dropdown-toggle.btn-gold:focus,
        .btn-gold:active.focus,
        .btn-gold.active.focus,
        .open > .dropdown-toggle.btn-gold.focus {
        color: #846e20;
        background-color: #d8a903;
        border-color: #b08903;
        }
        .btn-gold:active,
        .btn-gold.active,
        .open > .dropdown-toggle.btn-gold {
        background-image: none;
        }
        .btn-gold.disabled:hover,
        .btn-gold[disabled]:hover,
        fieldset[disabled] .btn-gold:hover,
        .btn-gold.disabled:focus,
        .btn-gold[disabled]:focus,
        fieldset[disabled] .btn-gold:focus,
        .btn-gold.disabled.focus,
        .btn-gold[disabled].focus,
        fieldset[disabled] .btn-gold.focus {
        background-color: #fcd036;
        border-color: #fcd036;
        }
        .btn-gold .badge {
        color: #fcd036;
        background-color: #846e20;
        }
        .btn-gold:hover,
        .btn-gold:focus,
        .btn-gold.focus {
        color: #846e20 !important;
        }
            .btn-gold.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-gold.btn-icon i {
            background-color: #fbc70e;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-gold.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-gold.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-gold.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-gold.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-gold.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-gold.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-gold.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-gold.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-gold.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-gold.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-gold.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-black {
            color: #FFF;
            background-color: #000000;
            border-color: #000000;
            }
            .btn-black:focus,
            .btn-black.focus {
            color: #FFF;
            background-color: #000000;
            border-color: #000000;
            }
            .btn-black:hover {
            color: #FFF;
            background-color: #000000;
            border-color: #000000;
            }
            .btn-black:active,
            .btn-black.active,
            .open > .dropdown-toggle.btn-black {
            color: #FFF;
            background-color: #000000;
            border-color: #000000;
            }
            .btn-black:active:hover,
            .btn-black.active:hover,
            .open > .dropdown-toggle.btn-black:hover,
            .btn-black:active:focus,
            .btn-black.active:focus,
            .open > .dropdown-toggle.btn-black:focus,
            .btn-black:active.focus,
            .btn-black.active.focus,
            .open > .dropdown-toggle.btn-black.focus {
            color: #FFF;
            background-color: #000000;
            border-color: #000000;
            }
            .btn-black:active,
            .btn-black.active,
            .open > .dropdown-toggle.btn-black {
            background-image: none;
            }
            .btn-black.disabled:hover,
            .btn-black[disabled]:hover,
            fieldset[disabled] .btn-black:hover,
            .btn-black.disabled:focus,
            .btn-black[disabled]:focus,
            fieldset[disabled] .btn-black:focus,
            .btn-black.disabled.focus,
            .btn-black[disabled].focus,
            fieldset[disabled] .btn-black.focus {
            background-color: #000000;
            border-color: #000000;
            }
            .btn-black .badge {
            color: #000000;
            background-color: #FFF;
            }
            .btn-black:hover,
            .btn-black:focus,
            .btn-black.focus {
            color: #FFF !important;
            }
            .btn-black.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-black.btn-icon i {
            background-color: #000000;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-black.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-black.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-black.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-black.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-black.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-black.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-black.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-black.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-black.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-black.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-black.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-white {
            color: #303641;
            background-color: #FFF;
            border-color: #FFF;
            border-color: #ebebeb !important;
            }
            .btn-white:focus,
            .btn-white.focus {
            color: #303641;
            background-color: #e6e6e6;
            border-color: #bfbfbf;
            }
            .btn-white:hover {
            color: #303641;
            background-color: #e6e6e6;
            border-color: #e0e0e0;
            }
            .btn-white:active,
            .btn-white.active,
            .open > .dropdown-toggle.btn-white {
            color: #303641;
            background-color: #e6e6e6;
            border-color: #e0e0e0;
            }
            .btn-white:active:hover,
            .btn-white.active:hover,
            .open > .dropdown-toggle.btn-white:hover,
            .btn-white:active:focus,
            .btn-white.active:focus,
            .open > .dropdown-toggle.btn-white:focus,
            .btn-white:active.focus,
            .btn-white.active.focus,
            .open > .dropdown-toggle.btn-white.focus {
            color: #303641;
            background-color: #d4d4d4;
            border-color: #bfbfbf;
            }
            .btn-white:active,
            .btn-white.active,
            .open > .dropdown-toggle.btn-white {
            background-image: none;
            }
            .btn-white.disabled:hover,
            .btn-white[disabled]:hover,
            fieldset[disabled] .btn-white:hover,
            .btn-white.disabled:focus,
            .btn-white[disabled]:focus,
            fieldset[disabled] .btn-white:focus,
            .btn-white.disabled.focus,
            .btn-white[disabled].focus,
            fieldset[disabled] .btn-white.focus {
            background-color: #FFF;
            border-color: #FFF;
            }
            .btn-white .badge {
            color: #FFF;
            background-color: #303641;
            }
            .btn-white:hover,
            .btn-white:focus,
            .btn-white.focus {
            color: #303641 !important;
            }
            .btn-white.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-white.btn-icon i {
            background-color: #ebebeb;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-white.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-white.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-white.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-white.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-white.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-white.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-white.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-white.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-white.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-white.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-white.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-warning {
            color: #fff;
            background-color: #fad839;
            border-color: #f9d320;
            }
            .btn-warning:focus,
            .btn-warning.focus {
            color: #fff;
            background-color: #f9ce07;
            border-color: #967c04;
            }
            .btn-warning:hover {
            color: #fff;
            background-color: #f9ce07;
            border-color: #d7b205;
            }
            .btn-warning:active,
            .btn-warning.active,
            .open > .dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #f9ce07;
            border-color: #d7b205;
            }
            .btn-warning:active:hover,
            .btn-warning.active:hover,
            .open > .dropdown-toggle.btn-warning:hover,
            .btn-warning:active:focus,
            .btn-warning.active:focus,
            .open > .dropdown-toggle.btn-warning:focus,
            .btn-warning:active.focus,
            .btn-warning.active.focus,
            .open > .dropdown-toggle.btn-warning.focus {
            color: #fff;
            background-color: #d7b205;
            border-color: #967c04;
            }
            .btn-warning:active,
            .btn-warning.active,
            .open > .dropdown-toggle.btn-warning {
            background-image: none;
            }
            .btn-warning.disabled:hover,
            .btn-warning[disabled]:hover,
            fieldset[disabled] .btn-warning:hover,
            .btn-warning.disabled:focus,
            .btn-warning[disabled]:focus,
            fieldset[disabled] .btn-warning:focus,
            .btn-warning.disabled.focus,
            .btn-warning[disabled].focus,
            fieldset[disabled] .btn-warning.focus {
            background-color: #fad839;
            border-color: #f9d320;
            }
            .btn-warning .badge {
            color: #fad839;
            background-color: #fff;
            }
            .btn-warning:hover,
            .btn-warning:focus,
            .btn-warning.focus {
            color: #fff !important;
            }
            .btn-warning.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-warning.btn-icon i {
            background-color: #f9d011;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-warning.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-warning.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-warning.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-warning.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-warning.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-warning.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-warning.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-warning.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-warning.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-warning.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-warning.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-danger {
            color: #fff;
            background-color: #cc2424;
            border-color: #b62020;
            }
            .btn-danger:focus,
            .btn-danger.focus {
            color: #fff;
            background-color: #a11c1c;
            border-color: #4a0d0d;
            }
            .btn-danger:hover {
            color: #fff;
            background-color: #a11c1c;
            border-color: #821717;
            }
            .btn-danger:active,
            .btn-danger.active,
            .open > .dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #a11c1c;
            border-color: #821717;
            }
            .btn-danger:active:hover,
            .btn-danger.active:hover,
            .open > .dropdown-toggle.btn-danger:hover,
            .btn-danger:active:focus,
            .btn-danger.active:focus,
            .open > .dropdown-toggle.btn-danger:focus,
            .btn-danger:active.focus,
            .btn-danger.active.focus,
            .open > .dropdown-toggle.btn-danger.focus {
            color: #fff;
            background-color: #821717;
            border-color: #4a0d0d;
            }
            .btn-danger:active,
            .btn-danger.active,
            .open > .dropdown-toggle.btn-danger {
            background-image: none;
            }
            .btn-danger.disabled:hover,
            .btn-danger[disabled]:hover,
            fieldset[disabled] .btn-danger:hover,
            .btn-danger.disabled:focus,
            .btn-danger[disabled]:focus,
            fieldset[disabled] .btn-danger:focus,
            .btn-danger.disabled.focus,
            .btn-danger[disabled].focus,
            fieldset[disabled] .btn-danger.focus {
            background-color: #cc2424;
            border-color: #b62020;
            }
            .btn-danger .badge {
            color: #cc2424;
            background-color: #fff;
            }
            .btn-danger:hover,
            .btn-danger:focus,
            .btn-danger.focus {
            color: #fff !important;
            }
            .btn-danger.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-danger.btn-icon i {
            background-color: #a91e1e;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-danger.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-danger.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-danger.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-danger.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-danger.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-danger.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-danger.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-danger.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-danger.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-danger.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-danger.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-success,
            .btn-green {
            color: #fff;
            background-color: #00a651;
            border-color: #008d45;
            }
            .btn-success:focus,
            .btn-green:focus,
            .btn-success.focus,
            .btn-green.focus {
            color: #fff;
            background-color: #007338;
            border-color: #000d06;
            }
            .btn-success:hover,
            .btn-green:hover {
            color: #fff;
            background-color: #007338;
            border-color: #004f27;
            }
            .btn-success:active,
            .btn-green:active,
            .btn-success.active,
            .btn-green.active,
            .open > .dropdown-toggle.btn-success,
            .open > .dropdown-toggle.btn-green {
            color: #fff;
            background-color: #007338;
            border-color: #004f27;
            }
            .btn-success:active:hover,
            .btn-green:active:hover,
            .btn-success.active:hover,
            .btn-green.active:hover,
            .open > .dropdown-toggle.btn-success:hover,
            .open > .dropdown-toggle.btn-green:hover,
            .btn-success:active:focus,
            .btn-green:active:focus,
            .btn-success.active:focus,
            .btn-green.active:focus,
            .open > .dropdown-toggle.btn-success:focus,
            .open > .dropdown-toggle.btn-green:focus,
            .btn-success:active.focus,
            .btn-green:active.focus,
            .btn-success.active.focus,
            .btn-green.active.focus,
            .open > .dropdown-toggle.btn-success.focus,
            .open > .dropdown-toggle.btn-green.focus {
            color: #fff;
            background-color: #004f27;
            border-color: #000d06;
            }
            .btn-success:active,
            .btn-green:active,
            .btn-success.active,
            .btn-green.active,
            .open > .dropdown-toggle.btn-success,
            .open > .dropdown-toggle.btn-green {
            background-image: none;
            }
            .btn-success.disabled:hover,
            .btn-green.disabled:hover,
            .btn-success[disabled]:hover,
            .btn-green[disabled]:hover,
            fieldset[disabled] .btn-success:hover,
            fieldset[disabled] .btn-green:hover,
            .btn-success.disabled:focus,
            .btn-green.disabled:focus,
            .btn-success[disabled]:focus,
            .btn-green[disabled]:focus,
            fieldset[disabled] .btn-success:focus,
            fieldset[disabled] .btn-green:focus,
            .btn-success.disabled.focus,
            .btn-green.disabled.focus,
            .btn-success[disabled].focus,
            .btn-green[disabled].focus,
            fieldset[disabled] .btn-success.focus,
            fieldset[disabled] .btn-green.focus {
            background-color: #00a651;
            border-color: #008d45;
            }
            .btn-success .badge,
            .btn-green .badge {
            color: #00a651;
            background-color: #fff;
            }
            .btn-success:hover,
            .btn-green:hover,
            .btn-success:focus,
            .btn-green:focus,
            .btn-success.focus,
            .btn-green.focus {
            color: #fff !important;
            }
            .btn-success.btn-icon,
            .btn-green.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-success.btn-icon i,
            .btn-green.btn-icon i {
            background-color: #007d3d;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-success.btn-icon.icon-left,
            .btn-green.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-success.btn-icon.icon-left i,
            .btn-green.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-success.btn-icon.btn-lg,
            .btn-green.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-success.btn-icon.btn-lg.icon-left,
            .btn-green.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-success.btn-icon.btn-lg i,
            .btn-green.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-success.btn-icon.btn-sm,
            .btn-green.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-success.btn-icon.btn-sm.icon-left,
            .btn-green.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-success.btn-icon.btn-sm i,
            .btn-green.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-success.btn-icon.btn-xs,
            .btn-green.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-success.btn-icon.btn-xs.icon-left,
            .btn-green.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-success.btn-icon.btn-xs i,
            .btn-green.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-info {
            color: #fff;
            background-color: #21a9e1;
            border-color: #1c99cd;
            }
            .btn-info:focus,
            .btn-info.focus {
            color: #fff;
            background-color: #1988b6;
            border-color: #0c455d;
            }
            .btn-info:hover {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .btn-info:active,
            .btn-info.active,
            .open > .dropdown-toggle.btn-info {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .btn-info:active:hover,
            .btn-info.active:hover,
            .open > .dropdown-toggle.btn-info:hover,
            .btn-info:active:focus,
            .btn-info.active:focus,
            .open > .dropdown-toggle.btn-info:focus,
            .btn-info:active.focus,
            .btn-info.active.focus,
            .open > .dropdown-toggle.btn-info.focus {
            color: #fff;
            background-color: #147197;
            border-color: #0c455d;
            }
            .btn-info:active,
            .btn-info.active,
            .open > .dropdown-toggle.btn-info {
            background-image: none;
            }
            .btn-info.disabled:hover,
            .btn-info[disabled]:hover,
            fieldset[disabled] .btn-info:hover,
            .btn-info.disabled:focus,
            .btn-info[disabled]:focus,
            fieldset[disabled] .btn-info:focus,
            .btn-info.disabled.focus,
            .btn-info[disabled].focus,
            fieldset[disabled] .btn-info.focus {
            background-color: #21a9e1;
            border-color: #1c99cd;
            }
            .btn-info .badge {
            color: #21a9e1;
            background-color: #fff;
            }
            .btn-info:hover,
            .btn-info:focus,
            .btn-info.focus {
            color: #fff !important;
            }
            .btn-info.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .btn-info.btn-icon i {
            background-color: #1a8fbf;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .btn-info.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .btn-info.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .btn-info.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .btn-info.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .btn-info.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-info.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .btn-info.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .btn-info.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-info.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .btn-info.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .btn-info.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-block + .btn-block {
            margin-top: 5px;
            }
            .bs-example > .btn,
            .bs-example > .make-switch,
            .bs-example > .btn-group {
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 9px;
            }
            .bs-example.bs-baseline-top .btn,
            .bs-example.bs-baseline-top .btn-group {
            vertical-align: top !important;
            }
            .invoice {
            margin: 0px 0;
            font-size: 14px;
            }
            .invoice .invoice-left strong,
            .invoice .invoice-right strong {
            color: #303641;
            }
            .invoice .invoice-left > h3,
            .invoice .invoice-right > h3 {
            margin-top: 0;
            }
            .invoice .invoice-right {
            text-align: right;
            }
            .invoice .margin {
            margin: 40px 0;
            }
            .invoice h4 {
            font-weight: bold;
            }
            @media print {
            .invoice-left {
                float: left !important;
            }
            .invoice-right {
                float: right !important;
                text-align: right !important;
                top: -20px;
                position: relative;
            }
            }
            @media (max-width: 768px) {
            .invoice .invoice-right {
                text-align: left;
                margin-top: 20px;
            }
            .invoice .margin {
                margin: 15px 0;
            }
            .invoice table {
                margin: 20px 0;
            }
            }
            .mail-env {
            position: relative;
            }
            .mail-env:before,
            .mail-env:after {
            content: " ";
            display: table;
            }
            .mail-env:after {
            clear: both;
            }
            hr + .mail-env {
            margin-top: -18px;
            border-top: 1px solid #ebebeb;
            margin-left: -20px;
            margin-right: -20px;
            }
            .mail-env + hr {
            margin-top: 0px;
            position: relative;
            margin-left: -20px;
            margin-right: -20px;
            }
            .mail-env .mail-sidebar,
            .mail-env .mail-body {
            float: left;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            .mail-env .mail-sidebar:before,
            .mail-env .mail-body:before,
            .mail-env .mail-sidebar:after,
            .mail-env .mail-body:after {
            content: " ";
            display: table;
            }
            .mail-env .mail-sidebar:after,
            .mail-env .mail-body:after {
            clear: both;
            }
            .mail-env .mail-sidebar-row {
            padding: 20px;
            }
            .mail-env > .mail-sidebar-row.visible-xs {
            padding-bottom: 0;
            }
            .mail-env .mail-sidebar {
            width: 22%;
            background: #f9f9f9;
            border-right: 1px solid #ebebeb;
            position: relative;
            }
            .mail-env .mail-sidebar > h4 {
            padding: 20px;
            }
            .mail-env .mail-sidebar .mail-menu {
            list-style: none;
            margin: 0;
            padding: 0;
            border-top: 1px solid #ebebeb;
            }
            .mail-env .mail-sidebar .mail-menu > li {
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #ebebeb;
            }
            .mail-env .mail-sidebar .mail-menu > li a {
            display: block;
            padding: 20px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .mail-env .mail-sidebar .mail-menu > li a .badge {
            font-size: 13px;
            }
            .mail-env .mail-sidebar .mail-menu > li a .badge-gray {
            background: transparent;
            border: 1px solid #ebebeb;
            }
            .mail-env .mail-sidebar .mail-menu > li a .badge-roundless {
            display: inline-block;
            width: 14px;
            height: 14px;
            -webkit-border-radius: 2px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 2px;
            -moz-background-clip: padding;
            border-radius: 2px;
            background-clip: padding-box;
            }
            .mail-env .mail-sidebar .mail-menu > li:hover a {
            background: rgba(255, 255, 255, 0.8);
            }
            .mail-env .mail-sidebar .mail-menu > li.active a {
            background: #fff;
            font-weight: bold;
            }
            .mail-env .mail-sidebar .mail-distancer {
            height: 40px;
            }
            .mail-env .mail-body {
            width: 78%;
            float: right;
            overflow: hidden;
            }
            .mail-env .mail-body .mail-header {
            padding: 20px;
            border-bottom: 1px solid #ebebeb;
            }
            .mail-env .mail-body .mail-header:before,
            .mail-env .mail-body .mail-header:after {
            content: " ";
            display: table;
            }
            .mail-env .mail-body .mail-header:after {
            clear: both;
            }
            .mail-env .mail-body .mail-header .mail-title {
            margin: 0;
            padding: 0;
            font-size: 20px;
            float: left;
            width: 75%;
            padding-right: 20px;
            color: #303641;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            }
            .mail-env .mail-body .mail-header .mail-title span.count {
            font-weight: normal;
            zoom: 1;
            -webkit-opacity: 0.3;
            -moz-opacity: 0.3;
            opacity: 0.3;
            filter: alpha(opacity=30);
            }
            .mail-env .mail-body .mail-header .mail-title .label {
            font-size: 9px;
            position: relative;
            top: -4px;
            }
            .mail-env .mail-body .mail-header .mail-search,
            .mail-env .mail-body .mail-header .mail-links {
            float: left;
            text-align: right;
            width: 25%;
            }
            .mail-env .mail-body .mail-header .mail-search.mail-links > .btn,
            .mail-env .mail-body .mail-header .mail-links.mail-links > .btn {
            margin-left: 5px;
            font-size: 11px;
            }
            .mail-env .mail-body .mail-header .mail-search.mail-links > .btn:first-child,
            .mail-env .mail-body .mail-header .mail-links.mail-links > .btn:first-child {
            margin-left: 0;
            }
            .mail-env .mail-body .mail-header .mail-search .form-control[type="text"],
            .mail-env .mail-body .mail-header .mail-links .form-control[type="text"] {
            height: 29px;
            }
            .mail-env .mail-body .mail-info {
            background: #f3f4f4;
            display: table;
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            border-bottom: 1px solid #ebebeb;
            }
            .mail-env .mail-body .mail-info:before,
            .mail-env .mail-body .mail-info:after {
            content: " ";
            display: table;
            }
            .mail-env .mail-body .mail-info:after {
            clear: both;
            }
            .mail-env .mail-body .mail-info .mail-sender,
            .mail-env .mail-body .mail-info .mail-date {
            display: table-cell;
            width: 50%;
            color: #a6a6a6;
            padding: 20px;
            }
            .mail-env .mail-body .mail-info .mail-sender.mail-sender span,
            .mail-env .mail-body .mail-info .mail-date.mail-sender span {
            font-weight: bold;
            color: #ec5956;
            }
            .mail-env .mail-body .mail-info .mail-sender.mail-sender img,
            .mail-env .mail-body .mail-info .mail-date.mail-sender img {
            margin-right: 5px;
            border: 2px solid #ebebeb;
            }
            .mail-env .mail-body .mail-info .mail-sender.mail-sender .dropdown-menu:after,
            .mail-env .mail-body .mail-info .mail-date.mail-sender .dropdown-menu:after {
            position: absolute;
            content: '';
            display: block;
            top: -5px;
            left: 17%;
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 0 3px 4px 3px;
            border-color: transparent transparent #cc2424 transparent;
            }
            .mail-env .mail-body .mail-info .mail-sender.mail-date,
            .mail-env .mail-body .mail-info .mail-date.mail-date {
            text-align: right;
            }
            .mail-env .mail-body .mail-text {
            border-bottom: 1px solid #ebebeb;
            padding: 20px;
            }
            .mail-env .mail-body .mail-attachments {
            padding: 20px;
            border-bottom: 1px solid #ebebeb;
            }
            .mail-env .mail-body .mail-attachments h4 {
            margin-bottom: 30px;
            line-height: 1;
            }
            .mail-env .mail-body .mail-attachments h4 span {
            zoom: 1;
            -webkit-opacity: 0.4;
            -moz-opacity: 0.4;
            opacity: 0.4;
            filter: alpha(opacity=40);
            }
            .mail-env .mail-body .mail-attachments ul {
            list-style: none;
            padding: 0;
            margin: 0;
            }
            .mail-env .mail-body .mail-attachments ul:before,
            .mail-env .mail-body .mail-attachments ul:after {
            content: " ";
            display: table;
            }
            .mail-env .mail-body .mail-attachments ul:after {
            clear: both;
            }
            .mail-env .mail-body .mail-attachments ul li {
            float: left;
            margin: 0;
            padding: 0;
            margin-right: 30px;
            margin-bottom: 20px;
            }
            .mail-env .mail-body .mail-attachments ul li > a {
            display: block;
            }
            .mail-env .mail-body .mail-attachments ul li > a img {
            position: relative;
            display: block;
            line-height: 1;
            margin-bottom: 10px;
            }
            .mail-env .mail-body .mail-attachments ul li > a.thumb {
            position: relative;
            }
            .mail-env .mail-body .mail-attachments ul li > a.thumb:after {
            font-family: "Entypo";
            content: '\e826';
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            background: #fff;
            width: 40px;
            height: 40px;
            margin-left: -20px;
            margin-top: -20px;
            font-size: 28px;
            text-align: center;
            line-height: 40px;
            vertical-align: text-top;
            color: #fff;
            background: rgba(0, 0, 0, 0.25);
            -webkit-border-radius: 4px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 4px;
            -moz-background-clip: padding;
            border-radius: 4px;
            background-clip: padding-box;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .mail-env .mail-body .mail-attachments ul li > a.thumb:hover:after {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .mail-env .mail-body .mail-attachments ul li > a.thumb.download:after {
            content: '\e82d';
            }
            .mail-env .mail-body .mail-attachments ul li > a.name span {
            color: #666666;
            float: right;
            }
            .mail-env .mail-body .mail-attachments ul li .links {
            display: block;
            font-size: 11px;
            color: #666666;
            margin-top: 6px;
            }
            .mail-env .mail-body .mail-attachments ul li .links a {
            color: #666666;
            }
            .mail-env .mail-body .mail-reply {
            border-bottom: 1px solid #ebebeb;
            padding: 20px;
            }
            .mail-env .mail-body .mail-reply .fake-form {
            padding: 20px;
            border: 2px solid #ebebeb;
            min-height: 100px;
            -webkit-border-radius: 4px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 4px;
            -moz-background-clip: padding;
            border-radius: 4px;
            background-clip: padding-box;
            }
            .mail-env .mail-body .mail-reply .fake-form > div a {
            font-weight: bold;
            color: #ec5956;
            }
            .mail-env .mail-body .mail-compose {
            padding: 20px;
            }
            .mail-env .mail-body .mail-compose .form-group {
            position: relative;
            border-bottom: 1px solid #ebebeb;
            padding-bottom: 15px;
            }
            .mail-env .mail-body .mail-compose .form-group label {
            position: absolute;
            left: 10px;
            top: 7px;
            z-index: 10;
            }
            .mail-env .mail-body .mail-compose .form-group input {
            border-color: transparent;
            position: relative;
            z-index: 5;
            padding-left: 100px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .mail-env .mail-body .mail-compose .form-group input:focus {
            background: #f9f9f9;
            border-color: #f4f4f4;
            }
            .mail-env .mail-body .mail-compose .form-group .field-options {
            position: absolute;
            right: 5px;
            top: 5px;
            z-index: 12;
            }
            .mail-env .mail-body .mail-compose .form-group .field-options a {
            display: inline-block;
            background: #f3f4f4;
            color: #7e8186;
            padding: 2px 6px;
            margin-left: 4px;
            text-align: center;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .mail-env .mail-body .mail-compose .compose-message-editor {
            padding-top: 5px;
            }
            .mail-env .mail-body .mail-compose .compose-message-editor textarea {
            height: 400px;
            }
            .mail-env .mail-body > div:last-child {
            border-bottom: 0;
            }
            .mail-env .mail-body .mail-table {
            margin-bottom: 0;
            }
            .mail-env .mail-body .mail-table thead tr th,
            .mail-env .mail-body .mail-table tfoot tr th {
            background: #ebebeb;
            border: 0;
            color: #666666;
            vertical-align: middle;
            border-bottom: 0;
            }
            .mail-env .mail-body .mail-table thead tr th a,
            .mail-env .mail-body .mail-table tfoot tr th a {
            color: #666666;
            }
            .mail-env .mail-body .mail-table thead tr th .mail-select-options,
            .mail-env .mail-body .mail-table tfoot tr th .mail-select-options {
            float: left;
            padding-top: 5px;
            }
            .mail-env .mail-body .mail-table thead tr th .mail-pagination,
            .mail-env .mail-body .mail-table tfoot tr th .mail-pagination {
            float: right;
            }
            .mail-env .mail-body .mail-table thead tr th .mail-pagination span,
            .mail-env .mail-body .mail-table tfoot tr th .mail-pagination span {
            color: rgba(102, 102, 102, 0.5);
            }
            .mail-env .mail-body .mail-table thead tr th .mail-pagination .btn-group,
            .mail-env .mail-body .mail-table tfoot tr th .mail-pagination .btn-group {
            margin-left: 5px;
            }
            .mail-env .mail-body .mail-table thead tr th .mail-pagination .btn-group .btn-sm,
            .mail-env .mail-body .mail-table tfoot tr th .mail-pagination .btn-group .btn-sm {
            padding-left: 7px;
            padding-right: 7px;
            }
            .mail-env .mail-body .mail-table tbody tr td {
            border-top: 0;
            border-bottom: 1px solid #ebebeb;
            height: 50px;
            vertical-align: middle;
            background: #f9f9f9;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-name,
            .mail-env .mail-body .mail-table tbody tr td.col-subject {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-name.col-subject a,
            .mail-env .mail-body .mail-table tbody tr td.col-subject.col-subject a {
            color: #8c8c8c;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-name.col-subject a.label,
            .mail-env .mail-body .mail-table tbody tr td.col-subject.col-subject a.label {
            color: #fff;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-name {
            width: 25%;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-subject a {
            display: inline-block;
            max-width: 400px;
            height: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-options {
            text-align: right;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-options a {
            color: #999999;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-time {
            width: 12%;
            text-align: right;
            color: rgba(102, 102, 102, 0.5);
            }
            .mail-env .mail-body .mail-table tbody tr td .star {
            display: inline-block;
            color: #dddddd;
            margin-right: 5px;
            font-size: 14px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .mail-env .mail-body .mail-table tbody tr td .star.stared,
            .mail-env .mail-body .mail-table tbody tr td .star.starred {
            color: #ff9600;
            }
            .mail-env .mail-body .mail-table tbody tr td > .label:first-child {
            margin-left: 0;
            }
            .mail-env .mail-body .mail-table tbody tr.unread > td {
            background-color: #fff !important;
            }
            .mail-env .mail-body .mail-table tbody tr.unread > td.col-name a {
            font-weight: bold;
            }
            .mail-env .mail-body .mail-table tbody tr.highlight > td {
            background-color: #ffffcc !important;
            }
            .mail-env .mail-body .mail-table > thead > tr > td:first-child,
            .mail-env .mail-body .mail-table > tbody > tr > td:first-child,
            .mail-env .mail-body .mail-table > tfoot > tr > td:first-child,
            .mail-env .mail-body .mail-table > thead > tr > th:first-child,
            .mail-env .mail-body .mail-table > tbody > tr > th:first-child,
            .mail-env .mail-body .mail-table > tfoot > tr > th:first-child {
            padding-left: 20px;
            }
            .mail-env .mail-body .mail-table > thead > tr > td:last-child,
            .mail-env .mail-body .mail-table > tbody > tr > td:last-child,
            .mail-env .mail-body .mail-table > tfoot > tr > td:last-child,
            .mail-env .mail-body .mail-table > thead > tr > th:last-child,
            .mail-env .mail-body .mail-table > tbody > tr > th:last-child,
            .mail-env .mail-body .mail-table > tfoot > tr > th:last-child {
            padding-right: 20px;
            }
            .mail-env .mail-body .mail-table > thead > tr > thX:first-child,
            .mail-env .mail-body .mail-table > tbody > tr > thX:first-child,
            .mail-env .mail-body .mail-table > tfoot > tr > thX:first-child {
            position: relative;
            }
            .mail-env .mail-body .mail-table > thead > tr > thX:first-child:before,
            .mail-env .mail-body .mail-table > tbody > tr > thX:first-child:before,
            .mail-env .mail-body .mail-table > tfoot > tr > thX:first-child:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            bottom: 0;
            width: 20px;
            background: #FFF;
            }
            .mail-env .mail-body .mail-table > thead > tr > thX:last-child,
            .mail-env .mail-body .mail-table > tbody > tr > thX:last-child,
            .mail-env .mail-body .mail-table > tfoot > tr > thX:last-child {
            position: relative;
            }
            .mail-env .mail-body .mail-table > thead > tr > thX:last-child:before,
            .mail-env .mail-body .mail-table > tbody > tr > thX:last-child:before,
            .mail-env .mail-body .mail-table > tfoot > tr > thX:last-child:before {
            position: absolute;
            content: '';
            top: 0;
            right: 0;
            bottom: 0;
            width: 20px;
            background: #FFF;
            }
            .mail-env .mail-body .mail-table > tbody > tr:nth-child(odd) > td {
            background: #fbfbfb;
            }
            .mail-env .mail-body .mail-table .neon-cb-replacement {
            top: 2px;
            }
            .mail-env .mail-body .mail-table .neon-cb-replacement .cb-wrapper {
            background: #fff;
            border-color: #dfdfdf;
            }
            .mail-env .mail-body .mail-table .neon-cb-replacement .cb-wrapper .checked {
            background: #dfdfdf;
            }
            .mail-env.right-sidebar .mail-sidebar {
            border-left: 1px solid #ebebeb;
            border-right: 0;
            }
            .mail-env.right-sidebar .mail-body {
            float: left;
            }
            @media (max-width: 999px) {
            .mail-env .mail-body .mail-table tbody tr td.col-subject a {
                max-width: 280px;
            }
            }
            @media (max-width: 959px) {
            .mail-env .mail-body .mail-header div.mail-title {
                width: 100%;
                white-space: normal;
            }
            .mail-env .mail-body .mail-header .mail-links {
                float: none;
                width: 100%;
                text-align: left;
                clear: left;
                padding-top: 10px;
            }
            .mail-env .mail-body .mail-info {
                display: block;
            }
            .mail-env .mail-body .mail-info .mail-sender,
            .mail-env .mail-body .mail-info .mail-date {
                display: block;
                width: 100%;
            }
            .mail-env .mail-body .mail-info .mail-sender.mail-sender,
            .mail-env .mail-body .mail-info .mail-date.mail-sender {
                padding-top: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #ebebeb;
            }
            .mail-env .mail-body .mail-info .mail-sender.mail-date,
            .mail-env .mail-body .mail-info .mail-date.mail-date {
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .mail-env .mail-body .mail-compose .compose-message-editor textarea {
                height: 300px;
            }
            }
            @media (max-width: 768px) {
            .mail-env .mail-sidebar {
                width: 30.8%;
            }
            .mail-env .mail-body {
                width: 69.2%;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-options {
                display: none;
            }
            .mail-env .mail-body .mail-table tbody tr td.col-subject a {
                max-width: 160px;
            }
            .mail-env .mail-body .mail-compose .compose-message-editor textarea {
                height: 240px;
            }
            }
            @media (max-width: 767px) {
            .mail-env .mail-sidebar,
            .mail-env .mail-body {
                width: 100%;
                float: none;
            }
            .mail-env .mail-body .mail-header .mail-title,
            .mail-env .mail-body .mail-header .mail-search,
            .mail-env .mail-body .mail-header .mail-links {
                float: none;
                width: 100%;
            }
            .mail-env .mail-body .mail-header .mail-title.mail-search,
            .mail-env .mail-body .mail-header .mail-search.mail-search,
            .mail-env .mail-body .mail-header .mail-links.mail-search,
            .mail-env .mail-body .mail-header .mail-title.mail-links,
            .mail-env .mail-body .mail-header .mail-search.mail-links,
            .mail-env .mail-body .mail-header .mail-links.mail-links {
                margin-top: 20px;
            }
            .mail-env .mail-body .mail-header .mail-links {
                padding-top: 0;
            }
            }
            @media (max-width: 449px) {
            .mail-env .mail-body .mail-table tbody tr td.col-subject a {
                max-width: 40px;
            }
            .mail-env .mail-body .mail-table tbody tr > td.col-name a.star {
                display: none;
            }
            .mail-env .mail-body .mail-table > thead > tr > td:last-child,
            .mail-env .mail-body .mail-table > tbody > tr > td:last-child,
            .mail-env .mail-body .mail-table > tfoot > tr > td:last-child,
            .mail-env .mail-body .mail-table > thead > tr > th:last-child,
            .mail-env .mail-body .mail-table > tbody > tr > th:last-child,
            .mail-env .mail-body .mail-table > tfoot > tr > th:last-child {
                padding-right: 10px;
            }
            .mail-env .mail-body .mail-table > thead > tr > td:first-child,
            .mail-env .mail-body .mail-table > tbody > tr > td:first-child,
            .mail-env .mail-body .mail-table > tfoot > tr > td:first-child,
            .mail-env .mail-body .mail-table > thead > tr > th:first-child,
            .mail-env .mail-body .mail-table > tbody > tr > th:first-child,
            .mail-env .mail-body .mail-table > tfoot > tr > th:first-child {
                padding-left: 10px;
            }
            }
            .login-page {
            background: #303641;
            }
            .login-page .login-content {
            position: relative;
            width: 320px;
            margin: 0 auto;
            text-align: center;
            padding: 20px 0;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-content a {
            color: #949494;
            }
            .login-page .login-header {
            position: relative;
            background: #373e4a;
            padding: 100px 0;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-header .description {
            font-size: 13px;
            margin-top: 20px;
            margin-bottom: 0;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-header.login-caret:after {
            position: absolute;
            content: '';
            left: 50%;
            bottom: 0;
            margin-left: -12.5px;
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 13px 12.5px 0 12.5px;
            border-color: #373e4a transparent transparent transparent;
            bottom: -13px;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-form {
            position: relative;
            padding-top: 60px;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-form .form-group {
            margin-bottom: 20px;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-form .form-group .input-group {
            background: #373e4a;
            border: 1px solid #373e4a;
            padding-top: 6px;
            padding-bottom: 6px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .login-page .login-form .form-group .input-group.focused {
            border-color: #626f85;
            border-color: rgba(98, 111, 133, 0.5);
            }
            .login-page .login-form .form-group .input-group.validate-has-error {
            border-color: #ec5956;
            border-color: rgba(236, 89, 86, 0.5);
            }
            .login-page .login-form .form-group .input-group.validate-has-error .error {
            position: absolute;
            right: 10px;
            top: 50%;
            margin-top: -8px;
            font-size: 10px;
            }
            .login-page .login-form .form-group .input-group .input-group-addon,
            .login-page .login-form .form-group .input-group .form-control {
            background: transparent;
            border: 0;
            }
            .login-page .login-form .form-group .input-group .input-group-addon {
            position: relative;
            }
            .login-page .login-form .form-group .input-group .input-group-addon:after {
            position: absolute;
            display: block;
            content: '';
            right: 0;
            top: 0;
            height: 100%;
            width: 1px;
            background: #454a54;
            -webkit-transform: scaleY(.56);
            -moz-transform: scaleY(.56);
            -ms-transform: scaleY(.56);
            -o-transform: scaleY(.56);
            transform: scaleY(.56);
            }
            .login-page .login-form .form-group .input-group .form-control {
            color: #fff;
            }
            .login-page .login-form .form-group .input-group .form-control:focus {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .login-page .login-form .form-group.lockscreen-input {
            margin-top: -155px;
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-thumb {
            position: relative;
            display: inline-block;
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-thumb img {
            border: 5px solid #373e4a;
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-thumb .lockscreen-progress-indicator {
            display: block;
            position: absolute;
            margin: 5px;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            color: #fff;
            font-size: 19px;
            text-align: center;
            line-height: 145px;
            background: rgba(0, 0, 0, 0.3);
            visibility: hidden;
            -webkit-border-radius: 50%;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 50%;
            -moz-background-clip: padding;
            border-radius: 50%;
            background-clip: padding-box;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-thumb canvas {
            position: absolute;
            left: 0;
            top: 0;
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-details {
            position: relative;
            padding-top: 5px;
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-details h4 {
            color: #fff;
            }
            .login-page .login-form .form-group.lockscreen-input .lockscreen-details span {
            display: block;
            padding-bottom: 5px;
            }
            .login-page .login-form .form-group .btn-login {
            border: 1px solid #454a54;
            text-align: left;
            padding: 15px 20px;
            font-size: 14px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .login-page .login-form .form-group .btn-login i {
            float: right;
            }
            .login-page .login-form .form-group .btn-login:hover,
            .login-page .login-form .form-group .btn-login:active {
            background: #373e4a;
            }
            .login-page .login-form .form-group .facebook-button,
            .login-page .login-form .form-group .twitter-button,
            .login-page .login-form .form-group .google-button {
            text-align: left;
            color: #fff;
            background-color: #3b5998;
            font-size: 12px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .login-page .login-form .form-group .facebook-button i,
            .login-page .login-form .form-group .twitter-button i,
            .login-page .login-form .form-group .google-button i {
            background-color: #385490;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .login-page .login-form .form-group .facebook-button:hover,
            .login-page .login-form .form-group .twitter-button:hover,
            .login-page .login-form .form-group .google-button:hover {
            background-color: rgba(59, 89, 152, 0.8);
            }
            .login-page .login-form .form-group .facebook-button:hover i,
            .login-page .login-form .form-group .twitter-button:hover i,
            .login-page .login-form .form-group .google-button:hover i {
            background-color: #31497e;
            }
            .login-page .login-form .form-group .facebook-button.twitter-button,
            .login-page .login-form .form-group .twitter-button.twitter-button,
            .login-page .login-form .form-group .google-button.twitter-button {
            background-color: #4099FF;
            }
            .login-page .login-form .form-group .facebook-button.twitter-button i,
            .login-page .login-form .form-group .twitter-button.twitter-button i,
            .login-page .login-form .form-group .google-button.twitter-button i {
            background-color: #0d7eff;
            }
            .login-page .login-form .form-group .facebook-button.twitter-button:hover,
            .login-page .login-form .form-group .twitter-button.twitter-button:hover,
            .login-page .login-form .form-group .google-button.twitter-button:hover {
            background-color: rgba(64, 153, 255, 0.8);
            }
            .login-page .login-form .form-group .facebook-button.twitter-button:hover i,
            .login-page .login-form .form-group .twitter-button.twitter-button:hover i,
            .login-page .login-form .form-group .google-button.twitter-button:hover i {
            background-color: #0071f3;
            }
            .login-page .login-form .form-group .facebook-button.google-button,
            .login-page .login-form .form-group .twitter-button.google-button,
            .login-page .login-form .form-group .google-button.google-button {
            background-color: #D34836;
            }
            .login-page .login-form .form-group .facebook-button.google-button i,
            .login-page .login-form .form-group .twitter-button.google-button i,
            .login-page .login-form .form-group .google-button.google-button i {
            background-color: #b03626;
            }
            .login-page .login-form .form-group .facebook-button.google-button:hover,
            .login-page .login-form .form-group .twitter-button.google-button:hover,
            .login-page .login-form .form-group .google-button.google-button:hover {
            background-color: rgba(211, 72, 54, 0.8);
            }
            .login-page .login-form .form-group .facebook-button.google-button:hover i,
            .login-page .login-form .form-group .twitter-button.google-button:hover i,
            .login-page .login-form .form-group .google-button.google-button:hover i {
            background-color: #9b3022;
            }
            .login-page .login-bottom-links {
            padding-top: 40px;
            padding-bottom: 30px;
            }
            .login-page .login-bottom-links a {
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .login-page .login-bottom-links a:hover {
            color: #aeaeae;
            }
            .login-page .login-bottom-links .link {
            font-size: 14px;
            display: inline-block;
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.7);
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-bottom-links .link:hover {
            color: #fff;
            }
            .login-page .login-progressbar {
            height: 0px;
            width: 100%;
            overflow: hidden;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-progressbar div {
            width: 0%;
            -moz-transition: 700ms all cubic-bezier(0.770, 0.000, 0.175, 1.000);
            -webkit-transition: 700ms all cubic-bezier(0.770, 0.000, 0.175, 1.000);
            -o-transition: 700ms all cubic-bezier(0.770, 0.000, 0.175, 1.000);
            transition: 700ms all cubic-bezier(0.770, 0.000, 0.175, 1.000);
            }
            .login-page .login-progressbar-indicator {
            position: absolute;
            width: 100%;
            text-align: center;
            top: 100%;
            margin-top: 80px;
            visibility: hidden;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: translateY(100px) scale(0.2);
            -moz-transform: translateY(100px) scale(0.2);
            -ms-transform: translateY(100px) scale(0.2);
            -o-transform: translateY(100px) scale(0.2);
            transform: translateY(100px) scale(0.2);
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page .login-progressbar-indicator h3 {
            color: #fff;
            margin: 0;
            margin-bottom: 10px;
            font-size: 20px;
            }
            .login-page.logging-in {
            overflow: hidden;
            }
            .login-page.logging-in .login-header {
            padding-top: 170px;
            padding-bottom: 30px;
            }
            .login-page.logging-in .login-header.login-caret:after {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .login-page.logging-in .login-header .description {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .login-page.logging-in .login-form form,
            .login-page.logging-in .login-form .link {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: translateY(-200px) scale(0.8);
            -moz-transform: translateY(-200px) scale(0.8);
            -ms-transform: translateY(-200px) scale(0.8);
            -o-transform: translateY(-200px) scale(0.8);
            transform: translateY(-200px) scale(0.8);
            }
            .login-page.logging-in .login-progressbar {
            background: #515b6d;
            height: 2px;
            }
            .login-page.logging-in .login-progressbar div {
            background: #de6c65;
            height: 2px;
            }
            .login-page.logging-in .login-progressbar-indicator {
            visibility: visible;
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transform: translateY(0px) scale(1);
            -moz-transform: translateY(0px) scale(1);
            -ms-transform: translateY(0px) scale(1);
            -o-transform: translateY(0px) scale(1);
            transform: translateY(0px) scale(1);
            }
            .login-page.logging-in-lockscreen .login-form .form-group.lockscreen-input .lockscreen-thumb .lockscreen-progress-indicator {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible;
            }
            .login-page.logging-in-lockscreen .login-form .form-group:nth-child(n + 2),
            .login-page.logging-in-lockscreen .login-form .link {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: translateY(-50px) scale(0.5);
            -moz-transform: translateY(-50px) scale(0.5);
            -ms-transform: translateY(-50px) scale(0.5);
            -o-transform: translateY(-50px) scale(0.5);
            transform: translateY(-50px) scale(0.5);
            }
            .login-page.login-form-fall .login-form {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            top: -100px;
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            }
            .login-page.login-form-fall .login-form .form-group {
            -moz-transition: all 550ms ease-in-out;
            -webkit-transition: all 550ms ease-in-out;
            -o-transition: all 550ms ease-in-out;
            transition: all 550ms ease-in-out;
            -moz-transition-delay: 250ms;
            -o-transition-delay: 250ms;
            -webkit-transition-delay: 250ms;
            transition-delay: 250ms;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(2) {
            -moz-transition-delay: 350ms;
            -o-transition-delay: 350ms;
            -webkit-transition-delay: 350ms;
            transition-delay: 350ms;
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(3) {
            -moz-transition-delay: 450ms;
            -o-transition-delay: 450ms;
            -webkit-transition-delay: 450ms;
            transition-delay: 450ms;
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(4) {
            -moz-transition-delay: 550ms;
            -o-transition-delay: 550ms;
            -webkit-transition-delay: 550ms;
            transition-delay: 550ms;
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(5) {
            -moz-transition-delay: 650ms;
            -o-transition-delay: 650ms;
            -webkit-transition-delay: 650ms;
            transition-delay: 650ms;
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(6) {
            -moz-transition-delay: 750ms;
            -o-transition-delay: 750ms;
            -webkit-transition-delay: 750ms;
            transition-delay: 750ms;
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(8) {
            -moz-transition-delay: 850ms;
            -o-transition-delay: 850ms;
            -webkit-transition-delay: 850ms;
            transition-delay: 850ms;
            }
            .login-page.login-form-fall .login-form .form-group:nth-child(9) {
            -moz-transition-delay: 950ms;
            -o-transition-delay: 950ms;
            -webkit-transition-delay: 950ms;
            transition-delay: 950ms;
            }
            .login-page.login-form-fall-init .login-form {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            top: 0;
            }
            .login-page.login-form-fall-init .login-form .form-group {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .login-page .form-steps .step {
            display: none;
            }
            .login-page .form-steps .step.current {
            display: block;
            }
            .login-page .form-register-success,
            .login-page .form-forgotpassword-success,
            .login-page .form-login-error {
            display: none;
            background: #00a651;
            color: #fff;
            padding: 10px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            margin-bottom: 30px;
            overflow: hidden;
            }
            .login-page .form-register-success.visible,
            .login-page .form-forgotpassword-success.visible,
            .login-page .form-login-error.visible {
            display: block;
            }
            .login-page .form-register-success i,
            .login-page .form-forgotpassword-success i,
            .login-page .form-login-error i {
            position: relative;
            font-size: 25px;
            background: #008d45;
            display: block;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-top: -10px;
            margin-left: -10px;
            margin-right: -10px;
            -webkit-border-radius: 3px 3px 0 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 3px 0 0;
            -moz-background-clip: padding;
            border-radius: 3px 3px 0 0;
            background-clip: padding-box;
            }
            .login-page .form-register-success h3,
            .login-page .form-forgotpassword-success h3,
            .login-page .form-login-error h3 {
            font-size: 15px;
            color: #fff;
            margin: 0;
            margin-top: 10px;
            margin-bottom: 5px;
            }
            .login-page .form-register-success p,
            .login-page .form-forgotpassword-success p,
            .login-page .form-login-error p {
            font-size: 11px;
            margin: 0;
            }
            .login-page .form-register-success.form-login-error,
            .login-page .form-forgotpassword-success.form-login-error,
            .login-page .form-login-error.form-login-error {
            padding: 0;
            background: #cc2424;
            }
            .login-page .form-register-success.form-login-error h3,
            .login-page .form-forgotpassword-success.form-login-error h3,
            .login-page .form-login-error.form-login-error h3 {
            background: #b62020;
            padding: 10px;
            margin: 0;
            margin-bottom: 5px;
            font-size: 12px;
            -webkit-border-radius: 3px 3px 0 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 3px 0 0;
            -moz-background-clip: padding;
            border-radius: 3px 3px 0 0;
            background-clip: padding-box;
            }
            .login-page .form-register-success.form-login-error p,
            .login-page .form-forgotpassword-success.form-login-error p,
            .login-page .form-login-error.form-login-error p {
            padding: 10px;
            }
            @media (max-width: 991px) {
            .login-page .login-header {
                padding: 20px 0;
            }
            .login-page .login-form {
                padding-top: 30px;
            }
            .login-page .login-form .form-group.lockscreen-input {
                margin-top: 0;
            }
            .login-page.logging-in .login-header {
                padding-top: 34px;
                padding-bottom: 6px;
            }
            .login-page.logging-in .login-progressbar-indicator {
                margin-top: 60px;
            }
            .login-page.logging-in .login-form form,
            .login-page.logging-in .login-form .link {
                -webkit-transform: translateY(-100px) scale(0.6);
                -moz-transform: translateY(-100px) scale(0.6);
                -ms-transform: translateY(-100px) scale(0.6);
                -o-transform: translateY(-100px) scale(0.6);
                transform: translateY(-100px) scale(0.6);
            }
            }
            @media (max-width: 350px) {
            .login-page .login-content {
                width: 280px;
            }
            }
            .tocify {
            border: 1px solid #f2f2f4;
            background: #fff;
            overflow: hidden;
            margin-top: 20px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .tocify.fixed {
            position: fixed;
            top: 10px;
            }
            .tocify li a:hover {
            background: #fafafb;
            color: #303641;
            }
            .tocify > ul {
            border-bottom: 1px solid #f2f2f4;
            }
            .tocify > ul ul li a {
            padding-left: 30px;
            }
            .tocify > ul ul {
            border-top: 1px solid #f2f2f4;
            background: #fdfdfd;
            }
            .tocify > ul:last-child {
            border-bottom: 0;
            }
            .tocify .tocify-item.active > a {
            background: #f8f8f8;
            font-weight: bold;
            }
            .tocify-extend-page {
            display: none !important;
            }
            @media (max-width: 991px) {
            .tocify.fixed {
                position: static;
                top: 0px;
            }
            }
            .calendar-env {
            position: relative;
            }
            .calendar-env:before,
            .calendar-env:after {
            content: " ";
            display: table;
            }
            .calendar-env:after {
            clear: both;
            }
            hr + .calendar-env {
            margin-top: -18px;
            border-top: 1px solid #ebebeb;
            margin-left: -20px;
            margin-right: -20px;
            }
            .calendar-env + hr {
            margin-top: 0px;
            position: relative;
            margin-left: -20px;
            margin-right: -20px;
            }
            .calendar-env .calendar-sidebar,
            .calendar-env .calendar-body {
            float: left;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            .calendar-env .calendar-sidebar:before,
            .calendar-env .calendar-body:before,
            .calendar-env .calendar-sidebar:after,
            .calendar-env .calendar-body:after {
            content: " ";
            display: table;
            }
            .calendar-env .calendar-sidebar:after,
            .calendar-env .calendar-body:after {
            clear: both;
            }
            .calendar-env .calendar-sidebar-row {
            padding: 20px;
            }
            .calendar-env > .calendar-sidebar-row.visible-xs {
            padding-bottom: 0;
            }
            .calendar-env .calendar-sidebar {
            width: 22%;
            background: #f9f9f9;
            border-right: 1px solid #ebebeb;
            position: relative;
            }
            .calendar-env .calendar-sidebar > h4 {
            padding: 20px;
            }
            .calendar-env .calendar-sidebar #add_event_form .input-group {
            background: #fff;
            }
            .calendar-env .calendar-sidebar .calendar-distancer {
            height: 40px;
            }
            .calendar-env .calendar-sidebar .events-list {
            border-top: 1px solid #ebebeb;
            padding-top: 20px;
            list-style: none;
            margin: 0;
            padding: 20px;
            }
            .calendar-env .calendar-sidebar .events-list li a {
            display: block;
            padding: 6px 8px;
            margin-bottom: 4px;
            -moz-transition: background 250ms ease-in-out, color 250ms ease-in-out;
            -webkit-transition: background 250ms ease-in-out, color 250ms ease-in-out;
            -o-transition: background 250ms ease-in-out, color 250ms ease-in-out;
            transition: background 250ms ease-in-out, color 250ms ease-in-out;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            background: #ee4749;
            color: #fff;
            }
            .calendar-env .calendar-sidebar .events-list li a:hover {
            background: #ec3032;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-blue {
            background: #21a9e1;
            color: #fff;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-blue:hover {
            background: #1c99cd;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-green {
            background: #00a651;
            color: #fff;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-green:hover {
            background: #008d45;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-primary {
            background: #303641;
            color: #fff;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-primary:hover {
            background: #252a32;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-orange {
            background: #ffae2f;
            color: #fff;
            }
            .calendar-env .calendar-sidebar .events-list li a.color-orange:hover {
            background: #ffa416;
            }
            .calendar-env .calendar-body {
            width: 78%;
            float: right;
            }
            .calendar-env .calendar-body .fc-header {
            border-bottom: 1px solid #ebebeb;
            }
            .calendar-env .calendar-body .fc-header h2,
            .calendar-env .calendar-body .fc-header h3 {
            margin: 0;
            padding: 0;
            }
            .calendar-env .calendar-body .fc-header .fc-header-left {
            padding: 20px;
            }
            .calendar-env .calendar-body .fc-header .fc-header-center {
            display: none;
            }
            .calendar-env .calendar-body .fc-header .fc-header-right {
            padding: 20px;
            text-align: right;
            }
            .calendar-env .calendar-body .fc-header .fc-button {
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            outline: 0 !important;
            color: #303641;
            background-color: #FFF;
            border-color: #FFF;
            border-color: #ebebeb !important;
            -webkit-border-radius: 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0;
            -moz-background-clip: padding;
            border-radius: 0;
            background-clip: padding-box;
            border-right-width: 0;
            }
            .calendar-env .calendar-body .fc-header .fc-button:focus,
            .calendar-env .calendar-body .fc-header .fc-button:active:focus,
            .calendar-env .calendar-body .fc-header .fc-button.active:focus,
            .calendar-env .calendar-body .fc-header .fc-button.focus,
            .calendar-env .calendar-body .fc-header .fc-button:active.focus,
            .calendar-env .calendar-body .fc-header .fc-button.active.focus {
            outline: none !important;
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
            }
            .calendar-env .calendar-body .fc-header .fc-button:hover,
            .calendar-env .calendar-body .fc-header .fc-button:focus,
            .calendar-env .calendar-body .fc-header .fc-button.focus {
            color: #303641;
            text-decoration: none;
            }
            .calendar-env .calendar-body .fc-header .fc-button:active,
            .calendar-env .calendar-body .fc-header .fc-button.active {
            outline: 0;
            background-image: none;
            -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            }
            .calendar-env .calendar-body .fc-header .fc-button.disabled,
            .calendar-env .calendar-body .fc-header .fc-button[disabled],
            fieldset[disabled] .calendar-env .calendar-body .fc-header .fc-button {
            cursor: not-allowed;
            zoom: 1;
            -webkit-opacity: 0.65;
            -moz-opacity: 0.65;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            a.calendar-env .calendar-body .fc-header .fc-button.disabled,
            fieldset[disabled] a.calendar-env .calendar-body .fc-header .fc-button {
            pointer-events: none;
            }
            .calendar-env .calendar-body .fc-header .fc-button:active {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon {
            position: relative;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon i {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            }
            .calendar-env .calendar-body .fc-header .fc-button:focus,
            .calendar-env .calendar-body .fc-header .fc-button.focus {
            color: #303641;
            background-color: #e6e6e6;
            border-color: #bfbfbf;
            }
            .calendar-env .calendar-body .fc-header .fc-button:hover {
            color: #303641;
            background-color: #e6e6e6;
            border-color: #e0e0e0;
            }
            .calendar-env .calendar-body .fc-header .fc-button:active,
            .calendar-env .calendar-body .fc-header .fc-button.active,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-header .fc-button {
            color: #303641;
            background-color: #e6e6e6;
            border-color: #e0e0e0;
            }
            .calendar-env .calendar-body .fc-header .fc-button:active:hover,
            .calendar-env .calendar-body .fc-header .fc-button.active:hover,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-header .fc-button:hover,
            .calendar-env .calendar-body .fc-header .fc-button:active:focus,
            .calendar-env .calendar-body .fc-header .fc-button.active:focus,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-header .fc-button:focus,
            .calendar-env .calendar-body .fc-header .fc-button:active.focus,
            .calendar-env .calendar-body .fc-header .fc-button.active.focus,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-header .fc-button.focus {
            color: #303641;
            background-color: #d4d4d4;
            border-color: #bfbfbf;
            }
            .calendar-env .calendar-body .fc-header .fc-button:active,
            .calendar-env .calendar-body .fc-header .fc-button.active,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-header .fc-button {
            background-image: none;
            }
            .calendar-env .calendar-body .fc-header .fc-button.disabled:hover,
            .calendar-env .calendar-body .fc-header .fc-button[disabled]:hover,
            fieldset[disabled] .calendar-env .calendar-body .fc-header .fc-button:hover,
            .calendar-env .calendar-body .fc-header .fc-button.disabled:focus,
            .calendar-env .calendar-body .fc-header .fc-button[disabled]:focus,
            fieldset[disabled] .calendar-env .calendar-body .fc-header .fc-button:focus,
            .calendar-env .calendar-body .fc-header .fc-button.disabled.focus,
            .calendar-env .calendar-body .fc-header .fc-button[disabled].focus,
            fieldset[disabled] .calendar-env .calendar-body .fc-header .fc-button.focus {
            background-color: #FFF;
            border-color: #FFF;
            }
            .calendar-env .calendar-body .fc-header .fc-button .badge {
            color: #FFF;
            background-color: #303641;
            }
            .calendar-env .calendar-body .fc-header .fc-button:hover,
            .calendar-env .calendar-body .fc-header .fc-button:focus,
            .calendar-env .calendar-body .fc-header .fc-button.focus {
            color: #303641 !important;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon i {
            background-color: #ebebeb;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.fc-corner-left {
            -webkit-border-radius: 3px 0 0 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-header .fc-button.fc-corner-right {
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            border-right-width: 1px;
            }
            .calendar-env .calendar-body .fc-header .fc-button.fc-corner-left.fc-corner-right {
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-header .fc-button.fc-state-active {
            background: #f5f5f6;
            }
            .calendar-env .calendar-body .fc-header .fc-header-space {
            width: 10px;
            display: inline-block;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-cell-overlay {
            background: rgba(255, 255, 204, 0.5);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event {
            background: #000;
            padding: 2px 4px;
            margin-top: 2px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            background: #ee4749;
            color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event:hover {
            background: #ec3032;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-blue {
            background: #21a9e1;
            color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-blue:hover {
            background: #1c99cd;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-green {
            background: #00a651;
            color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-green:hover {
            background: #008d45;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-primary {
            background: #303641;
            color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-primary:hover {
            background: #252a32;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-orange {
            background: #ffae2f;
            color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view .fc-event.color-orange:hover {
            background: #ffa416;
            }
            .calendar-env .calendar-body .fc-content .fc-view table thead tr th {
            text-align: center;
            padding: 5px 0;
            border-bottom: 1px solid #ebebeb;
            background: #f5f5f6;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day {
            vertical-align: text-top;
            text-align: right;
            border-bottom: 1px solid #ebebeb;
            padding-right: 10px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day .fc-day-number {
            margin-top: 5px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day:hover {
            background-color: rgba(250, 250, 250, 0.68);
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number {
            color: #fff;
            background-color: #21a9e1;
            border-color: #1c99cd;
            display: inline-block;
            padding: 5px 8px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            color: #fff;
            background-color: #1988b6;
            border-color: #0c455d;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active:hover,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active:focus,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active.focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active.focus,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            color: #fff;
            background-color: #147197;
            border-color: #0c455d;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number {
            background-image: none;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.disabled:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number[disabled]:hover,
            fieldset[disabled] .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.disabled:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number[disabled]:focus,
            fieldset[disabled] .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.disabled.focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number[disabled].focus,
            fieldset[disabled] .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            background-color: #21a9e1;
            border-color: #1c99cd;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number .badge {
            color: #21a9e1;
            background-color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            color: #fff !important;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon i {
            background-color: #1a8fbf;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            color: #fff;
            background-color: #1988b6;
            border-color: #0c455d;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active:hover,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active:focus,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active.focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active.focus,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            color: #fff;
            background-color: #147197;
            border-color: #0c455d;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:active,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.active,
            .open > .dropdown-toggle.calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number {
            background-image: none;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.disabled:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number[disabled]:hover,
            fieldset[disabled] .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.disabled:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number[disabled]:focus,
            fieldset[disabled] .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.disabled.focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number[disabled].focus,
            fieldset[disabled] .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            background-color: #21a9e1;
            border-color: #1c99cd;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number .badge {
            color: #21a9e1;
            background-color: #fff;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:hover,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number:focus,
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.focus {
            color: #fff !important;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon {
            position: relative;
            padding-right: 39px;
            border: none;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon i {
            background-color: #1a8fbf;
            padding: 6px 6px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-border-radius: 0 3px 3px 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0 3px 3px 0;
            -moz-background-clip: padding;
            border-radius: 0 3px 3px 0;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.icon-left {
            padding-right: 12px;
            padding-left: 39px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.icon-left i {
            float: left;
            right: auto;
            left: 0;
            -webkit-border-radius: 3px 0 0 3px !important;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 0 0 3px !important;
            -moz-background-clip: padding;
            border-radius: 3px 0 0 3px !important;
            background-clip: padding-box;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-lg {
            padding-right: 55px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-lg.icon-left {
            padding-right: 16px;
            padding-left: 55px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-lg i {
            padding: 10px 10px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-sm {
            padding-right: 36px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-sm.icon-left {
            padding-right: 10px;
            padding-left: 36px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-sm i {
            padding: 5px 6px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-xs {
            padding-right: 32px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-xs.icon-left {
            padding-right: 10px;
            padding-left: 32px;
            }
            .calendar-env .calendar-body .fc-content .fc-view table tbody tr td.fc-day.fc-today .fc-day-number.btn-icon.btn-xs i {
            padding: 2px 6px;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-days,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-days {
            border-bottom: 1px solid #e6e6e6;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-days + div,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-days + div {
            margin-top: 1px;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-days th,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-days th,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-days td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-days td {
            width: 1% !important;
            color: #666666;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-allday,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-allday {
            background: #fafafa;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-allday td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-allday td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-allday th,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-allday th {
            padding-top: 6px;
            padding-bottom: 6px;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-allday tbody tr .fc-agenda-axis,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-allday tbody tr .fc-agenda-axis {
            width: 60px !important;
            vertical-align: middle;
            text-align: right;
            color: #666666;
            border-right: 1px solid #e8e8e8;
            padding-right: 6px;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-divider,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-divider {
            height: 2px;
            background: #ebebeb;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-slots tr td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-slots tr td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-slots tr th,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-slots tr th {
            border-bottom: 1px dotted #ebebeb;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-slots tr td.fc-agenda-axis,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-slots tr td.fc-agenda-axis,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-slots tr th.fc-agenda-axis,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-slots tr th.fc-agenda-axis {
            width: 60px !important;
            text-align: right;
            color: #666666;
            border-right: 1px solid #e8e8e8;
            padding-right: 6px;
            }
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-slots tr.fc-minor td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-slots tr.fc-minor td,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaWeek .fc-agenda-slots tr.fc-minor th,
            .calendar-env .calendar-body .fc-content .fc-view.fc-view-agendaDay .fc-agenda-slots tr.fc-minor th {
            border-bottom-color: #e6e6e6;
            }
            .calendar-env .calendar-body > div:last-child {
            border-bottom: 0;
            }
            .calendar-env.right-sidebar .calendar-sidebar {
            border-left: 1px solid #ebebeb;
            border-right: 0;
            }
            .calendar-env.right-sidebar .calendar-body {
            float: left;
            }
            @media (max-width: 959px) {
            .calendar-env .calendar-body .calendar-header div.calendar-title {
                width: 100%;
                white-space: normal;
            }
            .calendar-env .calendar-body .calendar-header .calendar-links {
                float: none;
                width: 100%;
                text-align: left;
                clear: left;
                padding-top: 10px;
            }
            .calendar-env .calendar-body .calendar-info {
                display: block;
            }
            .calendar-env .calendar-body .calendar-info .calendar-sender,
            .calendar-env .calendar-body .calendar-info .calendar-date {
                display: block;
                width: 100%;
            }
            .calendar-env .calendar-body .calendar-info .calendar-sender.calendar-sender,
            .calendar-env .calendar-body .calendar-info .calendar-date.calendar-sender {
                padding-top: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #ebebeb;
            }
            .calendar-env .calendar-body .calendar-info .calendar-sender.calendar-date,
            .calendar-env .calendar-body .calendar-info .calendar-date.calendar-date {
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .calendar-env .calendar-body .calendar-compose .compose-message-editor textarea {
                height: 300px;
            }
            }
            @media (max-width: 768px) {
            .calendar-env .calendar-sidebar {
                width: 30.8%;
            }
            .calendar-env .calendar-body {
                width: 69.2%;
            }
            .calendar-env .calendar-body .calendar-compose .compose-message-editor textarea {
                height: 240px;
            }
            }
            @media (max-width: 767px) {
            .calendar-env .calendar-sidebar,
            .calendar-env .calendar-body {
                width: 100%;
                float: none;
            }
            .calendar-env .calendar-body .calendar-header .calendar-title,
            .calendar-env .calendar-body .calendar-header .calendar-search,
            .calendar-env .calendar-body .calendar-header .calendar-links {
                float: none;
                width: 100%;
            }
            .calendar-env .calendar-body .calendar-header .calendar-title.calendar-search,
            .calendar-env .calendar-body .calendar-header .calendar-search.calendar-search,
            .calendar-env .calendar-body .calendar-header .calendar-links.calendar-search,
            .calendar-env .calendar-body .calendar-header .calendar-title.calendar-links,
            .calendar-env .calendar-body .calendar-header .calendar-search.calendar-links,
            .calendar-env .calendar-body .calendar-header .calendar-links.calendar-links {
                margin-top: 20px;
            }
            .calendar-env .calendar-body .calendar-header .calendar-links {
                padding-top: 0;
            }
            .fc-header {
                display: block;
            }
            .fc-header .fc-header-left,
            .fc-header .fc-header-center,
            .fc-header .fc-header-right,
            .fc-header tr,
            .fc-header tbody {
                display: block;
                text-align: center !important;
            }
            .fc-header .fc-header-right {
                text-align: center !important;
                padding-bottom: 10px;
            }
            }
            .calendar-env {
            position: relative;
            }
            .calendar-env:before,
            .calendar-env:after {
            content: " ";
            display: table;
            }
            .calendar-env:after {
            clear: both;
            }
            .calendar-env .fc .fc-toolbar {
            padding: 20px;
            margin: 0;
            }
            .calendar-env .fc .fc-toolbar h2,
            .calendar-env .fc .fc-toolbar h3 {
            margin: 0;
            padding: 0;
            }
            .calendar-env .fc .fc-toolbar .fc-button {
            background: none;
            border: 1px solid #ebebeb;
            height: auto;
            padding: 5px 10px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: none;
            }
            .calendar-env .fc .fc-toolbar .fc-button .fc-icon {
            top: 0;
            margin: 0;
            }
            .calendar-env .fc .fc-toolbar .fc-button .fc-icon:after {
            font-weight: normal;
            font-size: 16px;
            }
            .calendar-env .fc .fc-view-container > .fc-view {
            border-left: 1px solid #ebebeb;
            }
            .calendar-env .fc .fc-view-container .fc-widget-content,
            .calendar-env .fc .fc-view-container .fc-widget-header {
            border: 0;
            }
            .calendar-env .fc .fc-view-container .fc-widget-header .fc-widget-header {
            border: 1px solid #ebebeb;
            border-left: 0;
            border-right: 0;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .calendar-env .fc .fc-view-container .fc-view table thead {
            border-left: 0;
            border-right: 0;
            }
            .calendar-env .fc .fc-view-container .fc-view table thead tr th {
            text-align: center;
            padding: 5px 0;
            border: 0;
            border-bottom: 1px solid #ebebeb;
            background: #f5f5f6;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody {
            border: 0;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-day {
            border: 0;
            border-top: 1px solid #ebebeb;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-day.fc-state-highlight {
            background: #fafafa;
            color: #111 !important;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-day-number {
            padding: 5px 10px;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event {
            background: #000;
            padding: 2px 4px;
            margin-top: 2px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            background: #ee4749;
            color: #fff;
            border: 0;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event:hover {
            background: #ec3032;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-blue {
            background: #21a9e1;
            color: #fff;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-blue:hover {
            background: #1c99cd;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-green {
            background: #00a651;
            color: #fff;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-green:hover {
            background: #008d45;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-primary {
            background: #303641;
            color: #fff;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-primary:hover {
            background: #252a32;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-orange {
            background: #ffae2f;
            color: #fff;
            }
            .calendar-env .fc .fc-view-container .fc-view table tbody .fc-event.color-orange:hover {
            background: #ffa416;
            }
            .calendar-env .fc .fc-view-container .fc-view.fc-agenda-view table .fc-widget-content {
            border-bottom: 1px solid #ebebeb;
            }
            .calendar-env .fc .fc-view-container .fc-view.fc-agenda-view table .fc-axis {
            border-right: 1px solid #ebebeb;
            }
            .notes-env {
            position: relative;
            }
            .notes-env .notes-header {
            display: table;
            width: 100%;
            vertical-align: middle;
            }
            .notes-env .notes-header:before,
            .notes-env .notes-header:after {
            content: " ";
            display: table;
            }
            .notes-env .notes-header:after {
            clear: both;
            }
            .notes-env .notes-header > h2,
            .notes-env .notes-header > .right {
            display: table-cell;
            vertical-align: middle;
            width: 50%;
            margin: 0;
            padding-bottom: 20px;
            }
            .notes-env .notes-header > .right {
            text-align: right;
            }
            .notes-env .notes-list {
            position: relative;
            background: #f0ecdb;
            margin-left: -20px;
            margin-right: -20px;
            border: 1px solid #ebebeb;
            border-left: 0;
            border-right: 0;
            }
            .notes-env .notes-list:before,
            .notes-env .notes-list:after {
            content: " ";
            display: table;
            }
            .notes-env .notes-list:after {
            clear: both;
            }
            .notes-env .notes-list .write-pad,
            .notes-env .notes-list .list-of-notes {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            .notes-env .notes-list .list-of-notes {
            float: right;
            width: 26%;
            list-style: none;
            margin: 0;
            padding: 0;
            padding-bottom: 30px;
            }
            .notes-env .notes-list .list-of-notes li {
            position: relative;
            padding: 30px;
            padding-bottom: 0;
            }
            .notes-env .notes-list .list-of-notes li a {
            display: block;
            border: 1px solid #e9e4ca;
            background: #fffced;
            padding: 20px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .notes-env .notes-list .list-of-notes li a strong,
            .notes-env .notes-list .list-of-notes li a span {
            display: block;
            }
            .notes-env .notes-list .list-of-notes li a strong + strong,
            .notes-env .notes-list .list-of-notes li a span + strong,
            .notes-env .notes-list .list-of-notes li a strong + span,
            .notes-env .notes-list .list-of-notes li a span + span {
            padding-top: 8px;
            }
            .notes-env .notes-list .list-of-notes li a strong {
            word-break: break-all;
            }
            .notes-env .notes-list .list-of-notes li a span {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            }
            .notes-env .notes-list .list-of-notes li a em {
            float: right;
            }
            .notes-env .notes-list .list-of-notes li a:hover {
            background: #eae6ce;
            border-color: #dad2a6;
            }
            .notes-env .notes-list .list-of-notes li a:hover span,
            .notes-env .notes-list .list-of-notes li a:hover strong {
            color: #737881;
            }
            .notes-env .notes-list .list-of-notes li .note-close {
            position: absolute;
            right: 30px;
            top: 30px;
            border: none;
            background: none;
            outline: none;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .notes-env .notes-list .list-of-notes li:hover .note-close {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .notes-env .notes-list .list-of-notes li .content {
            display: none;
            }
            .notes-env .notes-list .list-of-notes li.current a {
            background: #fff;
            }
            .notes-env .notes-list .list-of-notes li + .no-notes {
            display: none;
            }
            .notes-env .notes-list .write-pad {
            float: left;
            width: 74%;
            background: #fffced;
            position: relative;
            }
            .notes-env .notes-list .write-pad:after {
            display: block;
            content: '';
            position: absolute;
            left: 95px;
            top: 0;
            bottom: 0;
            background: #f9d4d1;
            width: 1px;
            }
            .notes-env .notes-list .write-pad textarea {
            background: transparent;
            border: none;
            background: url(../images/notes-lines.png) left top;
            background-attachment: local;
            min-height: 780px;
            font: 14px/52px "Helvetica Neue", Helvetica, "Noto Sans", sans-serif, serif;
            max-height: 1500px;
            padding-left: 125px;
            padding-right: 50px;
            }
            .notes-env .notes-list .write-pad textarea::-webkit-scrollbar {
            width: 5px;
            }
            .notes-env .notes-list .write-pad textarea::-webkit-scrollbar-track {
            width: 5px;
            background-color: #e8e3c9;
            }
            .notes-env .notes-list .write-pad textarea::-webkit-scrollbar-thumb {
            background-color: #bdbdbd;
            }
            .notes-env + footer.main {
            border-top: 0;
            padding-top: 10px;
            }
            @media (max-width: 992px) {
            .notes-env .notes-list .list-of-notes {
                width: 35%;
            }
            .notes-env .notes-list .write-pad {
                width: 65%;
            }
            .notes-env .notes-list .write-pad textarea {
                padding-left: 50px;
            }
            .notes-env .notes-list .write-pad:after {
                left: 35px;
            }
            }
            @media (max-width: 768px) {
            body .notes-env .notes-list .list-of-notes,
            body .notes-env .notes-list .write-pad {
                width: 100%;
                float: none;
            }
            body .notes-env .notes-list .list-of-notes {
                padding-bottom: 10px;
            }
            body .notes-env .notes-list .list-of-notes li {
                padding: 15px;
                padding-top: 10px;
                padding-bottom: 0;
            }
            body .notes-env .notes-list .list-of-notes li a span {
                display: none;
            }
            body .notes-env .notes-list .write-pad textarea {
                min-height: 400px;
                max-height: 600px;
            }
            }
            .gallery-env:before,
            .gallery-env:after {
            content: " ";
            display: table;
            }
            .gallery-env:after {
            clear: both;
            }
            .gallery-env article.album {
            border: 1px solid #ebebeb;
            margin-bottom: 30px;
            -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.04);
            -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.04);
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.04);
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .gallery-env article.album header {
            position: relative;
            }
            .gallery-env article.album header img {
            line-height: 1;
            margin: 0;
            width: 100%;
            display: block;
            max-width: 100%;
            height: auto;
            -webkit-border-radius: 3px 3px 0 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 3px 0 0;
            -moz-background-clip: padding;
            border-radius: 3px 3px 0 0;
            background-clip: padding-box;
            }
            .gallery-env article.album header .album-options {
            position: absolute;
            display: block;
            right: 10px;
            bottom: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 5px 7px;
            font-size: 11px;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .gallery-env article.album header:hover .album-options {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .gallery-env article.album .album-info {
            padding: 20px;
            }
            .gallery-env article.album .album-info h3 {
            font-size: 18px;
            margin: 0;
            }
            .gallery-env article.album .album-info p {
            margin: 0;
            margin-top: 10px;
            color: #80858e;
            }
            .gallery-env article.album footer {
            border-top: 1px solid #f0f0f0;
            }
            .gallery-env article.album footer:before,
            .gallery-env article.album footer:after {
            content: " ";
            display: table;
            }
            .gallery-env article.album footer:after {
            clear: both;
            }
            .gallery-env article.album footer .album-images-count,
            .gallery-env article.album footer .album-options {
            padding: 12px 15px;
            float: left;
            color: #8d929a;
            }
            .gallery-env article.album footer .album-images-count a,
            .gallery-env article.album footer .album-options a {
            color: #8d929a;
            display: inline-block;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .gallery-env article.album footer .album-images-count a + a,
            .gallery-env article.album footer .album-options a + a {
            margin-left: 10px;
            }
            .gallery-env article.album footer .album-options {
            float: right;
            border-left: 1px solid #f0f0f0;
            padding: 7px 10px;
            }
            .gallery-env article.album footer .album-options a {
            padding: 4px 5px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .gallery-env article.album footer .album-options a:hover {
            background: #f5f5f5;
            color: #43464b;
            }
            .gallery-env article.image-thumb {
            margin-bottom: 20px;
            }
            .gallery-env article.image-thumb .image {
            position: relative;
            }
            .gallery-env article.image-thumb .image img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 3px;
            width: 100%;
            }
            .gallery-env article.image-thumb .image-options {
            position: absolute;
            top: -10px;
            right: 8px;
            -moz-transform: scale(0);
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -o-transform-origin: 50% 0%;
            -webkit-transform-origin: 50% 0%;
            -moz-transform-origin: 50% 0%;
            -ms-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .gallery-env article.image-thumb .image-options a {
            display: inline-block;
            line-height: 1;
            margin-left: 2px;
            background: #737881;
            color: #FFF;
            width: 24px;
            height: 24px;
            line-height: 24px;
            -webkit-border-radius: 12px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 12px;
            -moz-background-clip: padding;
            border-radius: 12px;
            background-clip: padding-box;
            text-align: center;
            -moz-box-shadow: 0 2px 5px rgba(0,0,0,.2);
            -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.2);
            box-shadow: 0 2px 5px rgba(0,0,0,.2);
            }
            .gallery-env article.image-thumb .image-options a.delete {
            background: #dd1f26;
            }
            .gallery-env article.image-thumb:hover .image-options {
            -moz-transform: scale(1);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .gallery-env div[data-tag] {
            -moz-transition: opacity 350ms ease-in-out;
            -webkit-transition: opacity 350ms ease-in-out;
            -o-transition: opacity 350ms ease-in-out;
            transition: opacity 350ms ease-in-out;
            }
            .gallery-env div[data-tag].not-in-filter {
            zoom: 1;
            -webkit-opacity: 0.3;
            -moz-opacity: 0.3;
            opacity: 0.3;
            filter: alpha(opacity=30);
            }
            .gallery-env div[data-tag].no-animation {
            -moz-transition: none;
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
            }
            .gallery-env .image-categories {
            margin-bottom: 20px;
            background: #fafafb;
            position: relative;
            margin-top: -17px;
            padding: 10px;
            }
            .gallery-env .image-categories span {
            color: #80858e;
            }
            .gallery-env .image-categories a {
            display: inline-block;
            margin: 0 5px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .gallery-env .image-categories a.active {
            font-weight: bold;
            color: #4f5259;
            }
            .modal .croppable-image {
            border: 4px solid rgba(235, 235, 235, 0.5);
            }
            .modal h4 + .croppable-image {
            margin-top: 5px;
            }
            .jcrop-keymgr {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .gallery-image-edit-env {
            border-bottom: 1px solid #ebebeb;
            position: relative;
            margin-left: -1px;
            margin-right: -1px;
            margin-top: -1px;
            }
            .gallery-image-edit-env img {
            width: 100%;
            }
            .gallery-image-edit-env .close {
            position: absolute;
            right: 10px;
            top: 10px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            font-weight: bold;
            padding: 5px 10px;
            display: block;
            z-index: 1000;
            zoom: 1;
            -webkit-opacity: 0.7;
            -moz-opacity: 0.7;
            opacity: 0.7;
            filter: alpha(opacity=70);
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .gallery-image-edit-env .close:hover {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .gallery-image-edit-env .jcrop-holder {
            -webkit-border-radius: 3px 3px 0 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px 3px 0 0;
            -moz-background-clip: padding;
            border-radius: 3px 3px 0 0;
            background-clip: padding-box;
            }
            .profile-env > header {
            position: relative;
            z-index: 20;
            margin-top: 30px;
            }
            .profile-env > header .profile-picture {
            position: relative;
            }
            .profile-env > header .profile-picture img {
            float: right;
            -moz-box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.9);
            -webkit-box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.9);
            box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.9);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env > header .profile-picture:hover img {
            zoom: 1;
            -webkit-opacity: 0.5;
            -moz-opacity: 0.5;
            opacity: 0.5;
            filter: alpha(opacity=50);
            }
            .profile-env > header .profile-info-sections {
            margin: 0;
            padding: 0;
            margin-top: 15px;
            padding-left: 0;
            list-style: none;
            margin-left: -5px;
            }
            .profile-env > header .profile-info-sections > li {
            display: inline-block;
            padding-left: 5px;
            padding-right: 5px;
            }
            .profile-env > header .profile-info-sections .profile-name strong,
            .profile-env > header .profile-info-sections .profile-name span {
            display: block;
            }
            .profile-env > header .profile-info-sections .profile-name strong {
            font-size: 18px;
            font-weight: normal;
            }
            .profile-env > header .profile-info-sections .profile-name span {
            font-size: 12px;
            color: #bbbbbb;
            }
            .profile-env > header .profile-info-sections .profile-name span a {
            color: #bbbbbb;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env > header .profile-info-sections .profile-name span a:hover {
            color: #888888;
            }
            .profile-env > header .profile-info-sections .profile-name .user-status {
            position: relative;
            display: inline-block;
            background: #575d67;
            top: -2px;
            margin-left: 5px;
            width: 6px;
            height: 6px;
            -webkit-border-radius: 6px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 6px;
            -moz-background-clip: padding;
            border-radius: 6px;
            background-clip: padding-box;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env > header .profile-info-sections .profile-name .user-status.is-online {
            background-color: #06b53c;
            }
            .profile-env > header .profile-info-sections .profile-name .user-status.is-offline {
            background-color: #575d67;
            }
            .profile-env > header .profile-info-sections .profile-name .user-status.is-idle {
            background-color: #f7d227;
            }
            .profile-env > header .profile-info-sections .profile-name .user-status.is-busy {
            background-color: #ee4749;
            }
            .profile-env > header .profile-info-sections .profile-stat h3 {
            font-size: 18px;
            margin-bottom: 5px;
            }
            .profile-env > header .profile-info-sections .profile-stat span {
            color: #bbbbbb;
            }
            .profile-env > header .profile-info-sections .profile-stat span a {
            color: #bbbbbb;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env > header .profile-info-sections .profile-stat span a:hover {
            color: #888888;
            }
            .profile-env > header .profile-info-sections > li {
            padding: 0 40px;
            position: relative;
            }
            .profile-env > header .profile-info-sections > li + li:after {
            content: '';
            display: block;
            position: absolute;
            top: 15px;
            bottom: 0;
            left: 0;
            width: 1px;
            background: #ebebeb;
            margin: 8px 0;
            }
            .profile-env > header .profile-info-sections > li:first-child {
            padding-left: 0;
            }
            .profile-env > header .profile-buttons {
            margin-top: 35px;
            }
            .profile-env > header .profile-buttons a {
            margin: 0 4px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section {
            position: relative;
            z-index: 10;
            }
            .profile-env section.profile-info-tabs {
            position: relative;
            background: #f1f1f1;
            margin-left: -20px;
            margin-right: -20px;
            padding: 20px;
            margin-top: -20px;
            margin-bottom: 30px;
            }
            .profile-env section.profile-info-tabs .user-details {
            padding-left: 0;
            list-style: none;
            }
            .profile-env section.profile-info-tabs .user-details li {
            margin-bottom: 10px;
            }
            .profile-env section.profile-info-tabs .user-details li a {
            color: #a0a0a0;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section.profile-info-tabs .user-details li a:hover {
            color: #606060;
            }
            .profile-env section.profile-info-tabs .user-details li a:hover span {
            color: #e72c28;
            }
            .profile-env section.profile-info-tabs .user-details li a i {
            margin-right: 5px;
            }
            .profile-env section.profile-info-tabs .user-details li a span {
            color: #ec5956;
            font-weight: normal;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section.profile-info-tabs .nav-tabs {
            position: relative;
            margin-bottom: -20px;
            border-bottom: 0;
            }
            .profile-env section.profile-info-tabs .nav-tabs > li:first-child a {
            margin-left: 0;
            }
            .profile-env section.profile-info-tabs .nav-tabs li {
            margin-bottom: 0;
            }
            .profile-env section.profile-info-tabs .nav-tabs li a {
            border: none;
            padding: 10px 35px;
            font-size: 13px;
            background: #e1e1e1;
            margin-right: 10px;
            }
            .profile-env section.profile-info-tabs .nav-tabs li.active a {
            background: #fff;
            }
            .profile-env section.profile-feed {
            margin-bottom: 15px;
            padding-left: 20px;
            padding-right: 20px;
            }
            .profile-env section.profile-feed .profile-post-form {
            border: 1px solid #ebebeb;
            margin-bottom: 30px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .profile-env section.profile-feed .profile-post-form .form-control {
            border: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            margin: 0;
            background: #fff;
            min-height: 80px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .profile-env section.profile-feed .profile-post-form .form-options {
            background: #f3f3f3;
            border-top: 1px solid #ebebeb;
            padding: 10px;
            }
            .profile-env section.profile-feed .profile-post-form .form-options:before,
            .profile-env section.profile-feed .profile-post-form .form-options:after {
            content: " ";
            display: table;
            }
            .profile-env section.profile-feed .profile-post-form .form-options:after {
            clear: both;
            }
            .profile-env section.profile-feed .profile-post-form .form-options .post-type {
            float: left;
            padding-top: 6px;
            }
            .profile-env section.profile-feed .profile-post-form .form-options .post-type a {
            margin-left: 10px;
            font-size: 13px;
            color: #aaaaaa;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section.profile-feed .profile-post-form .form-options .post-type a:hover {
            color: #303641;
            }
            .profile-env section.profile-feed .profile-post-form .form-options .post-submit {
            float: right;
            }
            .profile-env section.profile-feed .profile-post-form .form-options .post-submit .btn {
            padding-left: 20px;
            padding-right: 20px;
            }
            .profile-env section.profile-feed .profile-stories article.story {
            margin: 30px 0;
            }
            .profile-env section.profile-feed .profile-stories article.story:before,
            .profile-env section.profile-feed .profile-stories article.story:after {
            content: " ";
            display: table;
            }
            .profile-env section.profile-feed .profile-stories article.story:after {
            clear: both;
            }
            .profile-env section.profile-feed .profile-stories article.story .user-thumb {
            float: left;
            width: 8%;
            }
            .profile-env section.profile-feed .profile-stories article.story .user-thumb a img {
            -moz-box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.04);
            -webkit-box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.04);
            box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.04);
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content {
            float: right;
            width: 92%;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header {
            display: block;
            margin-bottom: 10px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header:before,
            .profile-env section.profile-feed .profile-stories article.story .story-content header:after {
            content: " ";
            display: table;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header:after {
            clear: both;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header .publisher {
            float: left;
            color: #9b9fa6;
            font-size: 14px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header .publisher a {
            color: #303641;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header .publisher em {
            display: block;
            font-style: normal;
            font-size: 12px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content header .story-type {
            float: right;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content .story-main-content {
            font-size: 13px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content .story-main-content p {
            font-size: 13px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer {
            margin-top: 15px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .liked i {
            color: #ff4e50;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer > a {
            margin-right: 30px;
            display: inline-block;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer > a span {
            zoom: 1;
            -webkit-opacity: 0.6;
            -moz-opacity: 0.6;
            opacity: 0.6;
            filter: alpha(opacity=60);
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-top: 30px;
            border-top: 1px solid #ebebeb;
            padding-top: 20px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li {
            display: table;
            vertical-align: top;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li:before,
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li:after {
            content: " ";
            display: table;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li:after {
            clear: both;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li + li {
            margin-top: 15px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-thumb,
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content {
            display: table-cell;
            vertical-align: top;
            width: 100%;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-thumb {
            width: 1%;
            padding-right: 20px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content {
            border-bottom: 1px solid #ebebeb;
            padding-bottom: 15px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-name {
            font-weight: bold;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta {
            font-size: 11px;
            margin-top: 15px;
            color: #9b9fa6;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a {
            color: #8d929a;
            margin-right: 5px;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a + a {
            margin-left: 5px;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a i {
            zoom: 1;
            -webkit-opacity: 0.8;
            -moz-opacity: 0.8;
            opacity: 0.8;
            filter: alpha(opacity=80);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a:hover {
            color: #737881;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li .user-comment-content .user-comment-meta a:hover i {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content {
            position: relative;
            border-bottom: 0;
            padding-bottom: 0;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content .form-control {
            background: #eeeeee;
            border: 0;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content .btn {
            position: absolute;
            right: 5px;
            top: 5px;
            border: 0;
            background: transparent;
            color: #737881;
            font-size: 13px;
            zoom: 1;
            -webkit-opacity: 0.7;
            -moz-opacity: 0.7;
            opacity: 0.7;
            filter: alpha(opacity=70);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content footer .comments li.comment-form .user-comment-content .btn:hover {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content hr {
            margin-top: 40px;
            }
            @media (max-width: 992px) {
            .profile-env > header .profile-picture img {
                width: 90%;
            }
            .profile-env > header .profile-buttons {
                margin-top: 18px;
            }
            .profile-env > header .profile-info-sections .profile-name strong,
            .profile-env > header .profile-info-sections .profile-stat h3 {
                font-size: 16px;
            }
            .profile-env > header .profile-info-sections {
                margin-top: 0;
            }
            .profile-env > header .profile-info-sections > li {
                padding: 0 20px;
            }
            .profile-env section.profile-info-tabs .nav-tabs li a {
                padding-left: 25px;
                padding-right: 25px;
            }
            .profile-env section.profile-feed .profile-stories article.story .user-thumb {
                width: 10%;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content {
                width: 90%;
            }
            }
            @media (max-width: 768px) {
            .profile-env section.profile-info-tabs {
                margin-top: 30px;
            }
            .profile-env > header .profile-picture img {
                float: none;
            }
            .profile-env > header .profile-buttons a {
                margin-bottom: 5px;
            }
            }
            @media (max-width: 601px) {
            .profile-env > header .profile-info-sections {
                margin-bottom: 10px;
            }
            .profile-env > header .profile-info-sections li {
                padding: 15px;
            }
            .profile-env > header .profile-info-sections > li:first-child {
                padding-left: 0;
            }
            .profile-env > header .profile-buttons {
                margin-top: 0;
            }
            .profile-env > header .profile-picture {
                text-align: center;
                display: block;
            }
            .profile-env > header .profile-picture img {
                width: auto;
                float: none;
                display: inline-block;
                margin-bottom: 15px;
            }
            .profile-env section.profile-feed .profile-stories article.story .user-thumb {
                width: 18%;
            }
            .profile-env section.profile-feed .profile-stories article.story .story-content {
                width: 82%;
            }
            .profile-env section.profile-info-tabs .nav-tabs li a {
                padding-left: 15px;
                padding-right: 15px;
                margin-right: 5px;
                font-size: 12px;
            }
            .profile-env section.profile-feed {
                padding: 0;
            }
            .profile-env .col-sm-7,
            .profile-env .col-sm-3 {
                text-align: center;
            }
            .profile-env .col-sm-7 .profile-info-sections,
            .profile-env .col-sm-3 .profile-info-sections,
            .profile-env .col-sm-7 .profile-buttons,
            .profile-env .col-sm-3 .profile-buttons {
                display: inline-block;
            }
            .profile-env > header .profile-info-sections > li + li:after {
                margin: 18px 0;
            }
            }
            .map-checkin {
            border: 5px solid rgba(235, 235, 235, 0.2);
            -moz-box-shadow: 0px 0px 0px 1px #ebebeb;
            -webkit-box-shadow: 0px 0px 0px 1px #ebebeb;
            box-shadow: 0px 0px 0px 1px #ebebeb;
            background: #fff !important;
            }
            .page-body .main-content .cbp_tmtimeline:before {
            background: #f5f5f6;
            width: 5px;
            margin-left: -6px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmtime > span {
            color: #111;
            font-size: 15px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmtime > span:first-child {
            font-weight: bold;
            margin-bottom: 2px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmtime > span:last-child {
            color: #303641;
            zoom: 1;
            -webkit-opacity: 0.8;
            -moz-opacity: 0.8;
            opacity: 0.8;
            filter: alpha(opacity=80);
            font-size: 12px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmtime > span.large {
            font-size: 17px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmtime > span.hidden + span {
            margin-top: 8px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon {
            background: #ffffff;
            color: #d2d2d2;
            -moz-box-shadow: 0px 0px 0px 5px #f5f5f6;
            -webkit-box-shadow: 0px 0px 0px 5px #f5f5f6;
            box-shadow: 0px 0px 0px 5px #f5f5f6;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon.bg-primary {
            background-color: #303641;
            color: #fff;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon.bg-secondary {
            background-color: #ee4749;
            color: #fff;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon.bg-success {
            background-color: #00a651;
            color: #fff;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon.bg-info {
            background-color: #21a9e1;
            color: #fff;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon.bg-warning {
            background-color: #fad839;
            color: #fff;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmicon.bg-danger {
            background-color: #cc2424;
            color: #fff;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel {
            background: #f5f5f6;
            color: #737881;
            margin-bottom: 70px;
            padding: 1.7em;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel h2,
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel p {
            color: #737881;
            font-family: "Helvetica Neue", Helvetica, "Noto Sans", sans-serif;
            font-size: 12px;
            margin: 0;
            line-height: 1.42857143;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel p + p {
            margin-top: 15px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel h2 {
            font-size: 16px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel h2 a {
            color: #303641;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel h2 span {
            zoom: 1;
            -webkit-opacity: 0.6;
            -moz-opacity: 0.6;
            opacity: 0.6;
            filter: alpha(opacity=60);
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel:after {
            border-right-color: #f5f5f6;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel.empty {
            background: 0;
            padding: 9px 0;
            margin-bottom: 70px;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel.empty:after {
            visibility: hidden;
            }
            @media screen and (max-width: 47.2em) {
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel:after {
                border-right-color: transparent;
                border-bottom-color: #f5f5f6;
                left: 10px;
            }
            .page-body .main-content .cbp_tmtimeline > li .large {
                font-weight: bold;
                font-size: 16px !important;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel.empty {
                background: #f5f5f6;
                padding: 1.7em;
            }
            .page-body .main-content .cbp_tmtimeline > li .cbp_tmlabel.empty:after {
                visibility: visible;
            }
            }
            .timeline-centered {
            position: relative;
            margin-bottom: 30px;
            }
            .timeline-centered:before,
            .timeline-centered:after {
            content: " ";
            display: table;
            }
            .timeline-centered:after {
            clear: both;
            }
            .timeline-centered:before {
            content: '';
            position: absolute;
            display: block;
            width: 4px;
            background: #f5f5f6;
            left: 50%;
            top: 20px;
            bottom: 20px;
            margin-left: -4px;
            }
            .timeline-centered .timeline-entry {
            position: relative;
            width: 50%;
            float: right;
            margin-bottom: 70px;
            clear: both;
            }
            .timeline-centered .timeline-entry:before,
            .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
            }
            .timeline-centered .timeline-entry:after {
            clear: both;
            }
            .timeline-centered .timeline-entry.begin {
            margin-bottom: 0;
            }
            .timeline-centered .timeline-entry.left-aligned {
            float: left;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
            margin-left: 0;
            margin-right: -18px;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
            text-align: left;
            white-space: nowrap;
            left: auto;
            right: 100%;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
            float: right;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
            margin-left: 0;
            margin-right: 70px;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
            left: auto;
            right: 0;
            margin-left: 0;
            margin-right: -9px;
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
            }
            .timeline-centered .timeline-entry .timeline-entry-inner {
            position: relative;
            margin-left: -22px;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner:before,
            .timeline-centered .timeline-entry .timeline-entry-inner:after {
            content: " ";
            display: table;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner:after {
            clear: both;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
            position: absolute;
            left: -100px;
            text-align: right;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span {
            display: block;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:first-child {
            font-size: 15px;
            font-weight: bold;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:last-child {
            font-size: 12px;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
            background: #fff;
            color: #737881;
            display: block;
            width: 40px;
            height: 40px;
            -webkit-border-radius: 20px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 20px;
            -moz-background-clip: padding;
            border-radius: 20px;
            background-clip: padding-box;
            text-align: center;
            -moz-box-shadow: 0px 0px 0px 5px #f5f5f6;
            -webkit-box-shadow: 0px 0px 0px 5px #f5f5f6;
            box-shadow: 0px 0px 0px 5px #f5f5f6;
            line-height: 40px;
            font-size: 15px;
            float: left;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
            background-color: #303641;
            color: #fff;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-secondary {
            background-color: #ee4749;
            color: #fff;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
            background-color: #00a651;
            color: #fff;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
            background-color: #21a9e1;
            color: #fff;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
            background-color: #fad839;
            color: #fff;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
            background-color: #cc2424;
            color: #fff;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
            position: relative;
            background: #f5f5f6;
            padding: 1.7em;
            margin-left: 70px;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
            content: '';
            display: block;
            position: absolute;
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 9px 9px 9px 0;
            border-color: transparent #f5f5f6 transparent transparent;
            left: 0;
            top: 10px;
            margin-left: -9px;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2,
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
            color: #737881;
            font-family: "Helvetica Neue", Helvetica, "Noto Sans", sans-serif;
            font-size: 12px;
            margin: 0;
            line-height: 1.42857143;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p + p {
            margin-top: 15px;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
            font-size: 16px;
            margin-bottom: 10px;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
            color: #303641;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
            zoom: 1;
            -webkit-opacity: 0.6;
            -moz-opacity: 0.6;
            opacity: 0.6;
            filter: alpha(opacity=60);
            }
            @media screen and (max-width: 47.2em) {
            .timeline-centered {
                margin-top: 20px;
            }
            .timeline-centered:before {
                left: 22px;
            }
            .timeline-centered .timeline-entry,
            .timeline-centered .timeline-entry.left-aligned {
                width: 100%;
                float: none;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner,
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
                margin-left: 0;
                margin-right: 0;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time,
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
                left: 60px;
                right: auto;
                top: -40px;
                width: auto;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time span,
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time span {
                display: inline-block;
            }
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time span + span,
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time span + span {
                margin-left: 10px;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
                float: left;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
                margin-left: 70px;
                margin-right: 0;
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
                left: 0;
                right: auto;
                margin-left: -9px;
                margin-right: 0;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            }
            @media screen and (min-width: 1700px) {
            .cbp_tmtimeline > li .cbp_tmtime {
                width: 23% !important;
            }
            }
            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
            white-space: nowrap;
            right: auto;
            left: 100%;
            }
            .member-entry {
            border: 1px solid #ebebeb;
            padding: 15px;
            margin-top: 15px;
            margin-bottom: 30px;
            -moz-box-shadow: 1px 1px 1px rgba(0, 1, 1, 0.02);
            -webkit-box-shadow: 1px 1px 1px rgba(0, 1, 1, 0.02);
            box-shadow: 1px 1px 1px rgba(0, 1, 1, 0.02);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            -webkit-border-radius: 3px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 3px;
            -moz-background-clip: padding;
            border-radius: 3px;
            background-clip: padding-box;
            }
            .member-entry:before,
            .member-entry:after {
            content: " ";
            display: table;
            }
            .member-entry:after {
            clear: both;
            }
            .member-entry:hover {
            background: rgba(235, 235, 235, 0.3);
            -moz-box-shadow: 1px 1px 1px rgba(0, 1, 1, 0.06);
            -webkit-box-shadow: 1px 1px 1px rgba(0, 1, 1, 0.06);
            box-shadow: 1px 1px 1px rgba(0, 1, 1, 0.06);
            }
            .member-entry .member-img,
            .member-entry .member-details {
            float: left;
            }
            .member-entry .member-img {
            position: relative;
            display: block;
            width: 10%;
            }
            .member-entry .member-img img {
            width: 100%;
            display: block;
            max-width: 100%;
            height: auto;
            }
            .member-entry .member-img i {
            position: absolute;
            display: block;
            left: 50%;
            top: 50%;
            margin-top: -12.5px;
            margin-left: -12.5px;
            color: #FFF;
            font-size: 25px;
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            -moz-transform: scale(0.5);
            -webkit-transform: scale(0.5);
            -ms-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .member-entry .member-img:hover i {
            -moz-transform: scale(1);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .member-entry .member-details {
            width: 89.9%;
            }
            .member-entry .member-details h4 {
            font-size: 18px;
            margin-left: 20px;
            }
            .member-entry .member-details h4 a {
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .member-entry .member-details .info-list {
            margin-left: 5px;
            }
            .member-entry .member-details .info-list > div {
            margin-top: 5px;
            font-size: 13px;
            }
            .member-entry .member-details .info-list > div a {
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .member-entry .member-details .info-list > div i {
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .member-entry .member-details .info-list > div:hover i {
            color: #4f5259;
            }
            @media screen and (max-width: 768px) {
            .member-entry .member-img {
                width: 18%;
            }
            .member-entry .member-details {
                width: 81.9%;
            }
            .member-entry .member-details h4 {
                margin-top: 0;
            }
            }
            @media screen and (max-width: 480px) {
            .member-entry .member-img {
                width: 100%;
                float: none;
                text-align: center;
                position: relative;
                background: #f8f8f8;
                margin-bottom: 15px;
                -webkit-border-radius: 3px;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 3px;
                -moz-background-clip: padding;
                border-radius: 3px;
                background-clip: padding-box;
            }
            .member-entry .member-img img {
                width: auto;
                display: inline-block;
                -webkit-border-radius: 0;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 0;
                -moz-background-clip: padding;
                border-radius: 0;
                background-clip: padding-box;
            }
            .member-entry .member-details {
                width: 100%;
                float: none;
            }
            .member-entry .member-details h4,
            .member-entry .member-details .info-list {
                margin-left: 0;
            }
            .member-entry .member-details h4 > div,
            .member-entry .member-details .info-list > div {
                padding: 0;
            }
            .member-entry .member-details .info-list > div {
                margin-top: 10px;
            }
            }
            .comments-env .comment-filters {
            margin: 15px 0;
            margin-bottom: 30px;
            }
            .comments-env .comment-filters > a {
            position: relative;
            display: inline-block;
            color: #93979e;
            margin: 0 15px;
            font-size: 13px;
            font-weight: 400;
            }
            .comments-env .comment-filters > a.current {
            font-weight: bold;
            }
            .comments-env .comment-filters > a:after {
            content: '';
            display: block;
            position: absolute;
            right: -18px;
            width: 1px;
            height: 12px;
            background: #ebebeb;
            top: 3px;
            }
            .comments-env .comment-filters > a:first-child {
            margin-left: 0;
            }
            .comments-env .comment-filters > a:last-child {
            margin-right: 0;
            }
            .comments-env .comment-filters > a:last-child:after {
            display: none;
            }
            .comments-env .filtering .selectboxit-btn {
            height: 38px;
            }
            .comments-env .filtering .selectboxit-btn span {
            height: 38px;
            line-height: 38px;
            }
            .comments-env .filtering .search-form-full .form-control {
            margin-top: 0;
            }
            .comments-env .filtering .search-form-contaner {
            max-width: 300px;
            width: 32%;
            float: right;
            }
            .comments-env .filtering .search-form-contaner + .pagination-container {
            margin-right: 20px;
            }
            .comments-env .filtering .pagination-container {
            float: right;
            }
            .comments-env .filtering .pagination-container .pagination {
            margin: 0;
            }
            .comments-env .filtering .pagination-container .pagination a {
            position: relative;
            padding-top: 9px;
            padding-bottom: 10px;
            margin-top: -2px;
            }
            .comments-env .filtering .pagination-container + .search-form-contaner {
            margin-right: 20px;
            }
            .comments-env .panel-title h4 {
            padding-top: 5px;
            padding-bottom: 5px;
            }
            .comments-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: block;
            position: relative;
            }
            .comments-list > li {
            border-bottom: 1px solid #ebebeb;
            padding: 15px;
            }
            .comments-list > li:before,
            .comments-list > li:after {
            content: " ";
            display: table;
            }
            .comments-list > li:after {
            clear: both;
            }
            .comments-list > li:nth-child(even) {
            background: #f5f5f6;
            }
            .comments-list > li .comment-checkbox {
            float: left;
            width: 3%;
            padding-top: 3px;
            }
            .comments-list > li .comment-details {
            float: right;
            width: 96.9%;
            }
            .comments-list > li .comment-details a {
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            .comments-list > li .comment-details .comment-head {
            font-size: 13px;
            }
            .comments-list > li .comment-details .comment-head a {
            font-weight: bold;
            }
            .comments-list > li .comment-details .comment-text {
            margin-top: 15px;
            }
            .comments-list > li .comment-details .comment-footer {
            border-top: 1px solid #ebebeb;
            margin-top: 15px;
            padding-top: 15px;
            }
            .comments-list > li .comment-details .comment-footer:before,
            .comments-list > li .comment-details .comment-footer:after {
            content: " ";
            display: table;
            }
            .comments-list > li .comment-details .comment-footer:after {
            clear: both;
            }
            .comments-list > li .comment-details .comment-footer .comment-time {
            float: right;
            color: #80858e;
            }
            .comments-list > li .comment-details .comment-footer .action-links a {
            font-weight: bold;
            display: inline-block;
            margin-right: 10px;
            }
            .comments-list > li .comment-details .comment-footer .action-links .approve {
            color: #00a651;
            }
            .comments-list > li .comment-details .comment-footer .action-links .delete {
            color: #cc2424;
            }
            .comments-list > li:last-child {
            border-bottom: 0;
            }
            @media screen and (max-width: 768px) {
            .comments-list > li .comment-checkbox {
                width: 5%;
            }
            .comments-list > li .comment-details {
                width: 94.9%;
            }
            .comments-env .filtering .search-form-contaner {
                float: left;
            }
            .search-and-pagination {
                margin-top: 20px;
            }
            }
            @media screen and (max-width: 480px) {
            .comments-env .search-and-pagination .pagination-container,
            .comments-env .search-and-pagination .search-form-contaner {
                float: none !important;
                text-align: left;
            }
            .comments-env .search-and-pagination .search-form-contaner {
                margin-right: 0;
                width: 100%;
                max-width: 1000px;
            }
            .comments-env .search-and-pagination .search-form-contaner .search-form-full {
                margin-top: 10px;
            }
            .comments-list > li .comment-checkbox {
                width: 8%;
            }
            .comments-list > li .comment-details {
                width: 91.9%;
            }
            .comments-list > li .comment-details .comment-footer .action-links {
                float: none;
                width: 100%;
            }
            .comments-list > li .comment-details .comment-footer .action-links a {
                display: block;
            }
            }
            /**
            * Nestable
            */
            .dd {
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
            list-style: none;
            }
            .dd-list {
            display: block;
            position: relative;
            margin: 0;
            padding: 0;
            list-style: none;
            }
            .dd-list .dd-list {
            padding-left: 30px;
            }
            .dd-collapsed .dd-list {
            display: none;
            }
            .dd-item,
            .dd-empty,
            .dd-placeholder {
            display: block;
            position: relative;
            margin: 0;
            padding: 0;
            min-height: 20px;
            font-size: 13px;
            line-height: 20px;
            }
            .dd-handle,
            .dd-content {
            display: block;
            margin: 0px 0;
            padding: 5px 10px;
            background: #fafafa;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid #ebebeb;
            -moz-transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            }
            dd-content,
            .dd-content:hover {
            background: #fff;
            }
            .dd-item > button {
            display: block;
            position: relative;
            cursor: pointer;
            float: left;
            width: 25px;
            height: 20px;
            margin: 5px 0;
            padding: 0;
            text-indent: -9999px;
            white-space: nowrap;
            overflow: visible;
            border: 0;
            background: transparent;
            font-size: 12px;
            line-height: 1;
            text-align: center;
            font-weight: bold;
            margin-right: 10px;
            outline: 0;
            }
            .dd-item > button:after {
            content: '';
            display: block;
            position: absolute;
            right: 0px;
            top: -5px;
            bottom: -6px;
            width: 1px;
            background: #ebebeb;
            }
            .dd-item > button:before {
            content: '+';
            display: block;
            position: absolute;
            width: 100%;
            text-align: center;
            text-indent: 0;
            }
            .dd-item > button[data-action="collapse"]:before {
            content: '-';
            }
            .dd-placeholder,
            .dd-empty {
            margin: 0px 0;
            padding: 0;
            min-height: 30px;
            background: rgba(245, 245, 246, 0.3);
            border: 1px dotted #ebebeb;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            .dd-empty {
            border: 1px dashed #bbb;
            min-height: 100px;
            background-color: #e5e5e5;
            }
            .dd-dragel {
            position: absolute;
            pointer-events: none;
            z-index: 9999;
            }
            .dd-dragel > .dd-item .dd-handle,
            .dd-dragel > .dd-item .dd-content {
            margin-top: 0;
            }
            .dd-dragel .dd-handle,
            .dd-dragel .dd-content {
            -moz-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
            }
            .nested-list.with-margins .dd-item .dd-handle,
            .nested-list.with-margins .dd-item .dd-content {
            margin: 5px 0;
            }
            .nested-list.custom-drag-button .dd-handle {
            position: absolute !important;
            margin: 0 !important;
            width: 15px;
            height: 32px;
            padding-left: 5px;
            padding-right: 4px;
            cursor: pointer;
            padding-top: 7px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .nested-list.custom-drag-button .dd-handle span {
            display: block;
            line-height: 3px;
            color: rgba(115, 120, 129, 0.7);
            }
            .nested-list.custom-drag-button .dd-content {
            padding-left: 25px;
            }
            .nested-list.custom-drag-button button + .dd-handle {
            left: 24px;
            }
            .nested-list.custom-drag-button button + .dd-handle + .dd-content {
            padding-left: 50px;
            }
            .nested-list.custom-drag-button.drag-button-on-hover .dd-item > .dd-handle {
            zoom: 1;
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .nested-list.custom-drag-button.drag-button-on-hover .dd-item:hover > .dd-handle {
            zoom: 1;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            }
            .custom-handler .dd-item .dd-handle {
            position: absolute !important;
            margin: 0 !important;
            width: 15px;
            height: 32px;
            padding-left: 5px;
            padding-right: 4px;
            cursor: pointer;
            padding-top: 7px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .custom-handler .dd-item .dd-handle span {
            display: block;
            line-height: 3px;
            color: rgba(115, 120, 129, 0.7);
            }
            .custom-handler .dd-item .dd-content {
            padding-left: 25px;
            }
            .custom-handler .dd-item button + .dd-handle {
            left: 24px;
            }
            .custom-handler .dd-item button + .dd-handle + .dd-content {
            padding-left: 50px;
            }

            color: #999999;
            /*!
            * Bootstrap v3.3.5 (http://getbootstrap.com)
            * Copyright 2011-2015 Twitter, Inc.
            * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
            */
            /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
            html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            }
            body {
            margin: 0;
            }
            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            main,
            menu,
            nav,
            section,
            summary {
            display: block;
            }
            audio,
            canvas,
            progress,
            video {
            display: inline-block;
            vertical-align: baseline;
            }
            audio:not([controls]) {
            display: none;
            height: 0;
            }
            [hidden],
            template {
            display: none;
            }
            a {
            background-color: transparent;
            }
            a:active,
            a:hover {
            outline: 0;
            }
            abbr[title] {
            border-bottom: 1px dotted;
            }
            b,
            strong {
            font-weight: bold;
            }
            dfn {
            font-style: italic;
            }
            h1 {
            font-size: 2em;
            margin: 0.67em 0;
            }
            mark {
            background: #ff0;
            color: #000;
            }
            small {
            font-size: 80%;
            }
            sub,
            sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
            }
            sup {
            top: -0.5em;
            }
            sub {
            bottom: -0.25em;
            }
            img {
            border: 0;
            }
            svg:not(:root) {
            overflow: hidden;
            }
            figure {
            margin: 1em 40px;
            }
            hr {
            box-sizing: content-box;
            height: 0;
            }
            pre {
            overflow: auto;
            }
            code,
            kbd,
            pre,
            samp {
            font-family: monospace, monospace;
            font-size: 1em;
            }
            button,
            input,
            optgroup,
            select,
            textarea {
            color: inherit;
            font: inherit;
            margin: 0;
            }
            button {
            overflow: visible;
            }
            button,
            select {
            text-transform: none;
            }
            button,
            html input[type="button"],
            input[type="reset"],
            input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
            }
            button[disabled],
            html input[disabled] {
            cursor: default;
            }
            button::-moz-focus-inner,
            input::-moz-focus-inner {
            border: 0;
            padding: 0;
            }
            input {
            line-height: normal;
            }
            input[type="checkbox"],
            input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
            }
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
            height: auto;
            }
            input[type="search"] {
            -webkit-appearance: textfield;
            box-sizing: content-box;
            }
            input[type="search"]::-webkit-search-cancel-button,
            input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
            }
            fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em;
            }
            legend {
            border: 0;
            padding: 0;
            }
            textarea {
            overflow: auto;
            }
            optgroup {
            font-weight: bold;
            }
            table {
            border-collapse: collapse;
            border-spacing: 0;
            }
            td,
            th {
            padding: 0;
            }
            /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
            @media print {
            *,
            *:before,
            *:after {
                background: transparent !important;
                color: #000 !important;
                box-shadow: none !important;
                text-shadow: none !important;
            }
            a,
            a:visited {
                text-decoration: underline;
            }
            a[href]:after {
                content: " (" attr(href) ")";
            }
            abbr[title]:after {
                content: " (" attr(title) ")";
            }
            a[href^="#"]:after,
            a[href^="javascript:"]:after {
                content: "";
            }
            pre,
            blockquote {
                border: 1px solid #999;
                page-break-inside: avoid;
            }
            thead {
                display: table-header-group;
            }
            tr,
            img {
                page-break-inside: avoid;
            }
            img {
                max-width: 100% !important;
            }
            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3;
            }
            h2,
            h3 {
                page-break-after: avoid;
            }
            .navbar {
                display: none;
            }
            .btn > .caret,
            .dropup > .btn > .caret {
                border-top-color: #000 !important;
            }
            .label {
                border: 1px solid #000;
            }
            .table {
                border-collapse: collapse !important;
            }
            .table td,
            .table th {
                background-color: #fff !important;
            }
            .table-bordered th,
            .table-bordered td {
                border: 1px solid #ddd !important;
            }
            }
            @font-face {
            font-family: 'Glyphicons Halflings';
            src: url('../css/font-icons/glyphicons/glyphicons-halflings-regular.eot');
            src: url('../css/font-icons/glyphicons/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../css/font-icons/glyphicons/glyphicons-halflings-regular.woff2') format('woff2'), url('../css/font-icons/glyphicons/glyphicons-halflings-regular.woff') format('woff'), url('../css/font-icons/glyphicons/glyphicons-halflings-regular.ttf') format('truetype'), url('../css/font-icons/glyphicons/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
            }
            .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            }
            .glyphicon-asterisk:before {
            content: "\002a";
            }
            .glyphicon-plus:before {
            content: "\002b";
            }
            .glyphicon-euro:before,
            .glyphicon-eur:before {
            content: "\20ac";
            }
            .glyphicon-minus:before {
            content: "\2212";
            }
            .glyphicon-cloud:before {
            content: "\2601";
            }
            .glyphicon-envelope:before {
            content: "\2709";
            }
            .glyphicon-pencil:before {
            content: "\270f";
            }
            .glyphicon-glass:before {
            content: "\e001";
            }
            .glyphicon-music:before {
            content: "\e002";
            }
            .glyphicon-search:before {
            content: "\e003";
            }
            .glyphicon-heart:before {
            content: "\e005";
            }
            .glyphicon-star:before {
            content: "\e006";
            }
            .glyphicon-star-empty:before {
            content: "\e007";
            }
            .glyphicon-user:before {
            content: "\e008";
            }
            .glyphicon-film:before {
            content: "\e009";
            }
            .glyphicon-th-large:before {
            content: "\e010";
            }
            .glyphicon-th:before {
            content: "\e011";
            }
            .glyphicon-th-list:before {
            content: "\e012";
            }
            .glyphicon-ok:before {
            content: "\e013";
            }
            .glyphicon-remove:before {
            content: "\e014";
            }
            .glyphicon-zoom-in:before {
            content: "\e015";
            }
            .glyphicon-zoom-out:before {
            content: "\e016";
            }
            .glyphicon-off:before {
            content: "\e017";
            }
            .glyphicon-signal:before {
            content: "\e018";
            }
            .glyphicon-cog:before {
            content: "\e019";
            }
            .glyphicon-trash:before {
            content: "\e020";
            }
            .glyphicon-home:before {
            content: "\e021";
            }
            .glyphicon-file:before {
            content: "\e022";
            }
            .glyphicon-time:before {
            content: "\e023";
            }
            .glyphicon-road:before {
            content: "\e024";
            }
            .glyphicon-download-alt:before {
            content: "\e025";
            }
            .glyphicon-download:before {
            content: "\e026";
            }
            .glyphicon-upload:before {
            content: "\e027";
            }
            .glyphicon-inbox:before {
            content: "\e028";
            }
            .glyphicon-play-circle:before {
            content: "\e029";
            }
            .glyphicon-repeat:before {
            content: "\e030";
            }
            .glyphicon-refresh:before {
            content: "\e031";
            }
            .glyphicon-list-alt:before {
            content: "\e032";
            }
            .glyphicon-lock:before {
            content: "\e033";
            }
            .glyphicon-flag:before {
            content: "\e034";
            }
            .glyphicon-headphones:before {
            content: "\e035";
            }
            .glyphicon-volume-off:before {
            content: "\e036";
            }
            .glyphicon-volume-down:before {
            content: "\e037";
            }
            .glyphicon-volume-up:before {
            content: "\e038";
            }
            .glyphicon-qrcode:before {
            content: "\e039";
            }
            .glyphicon-barcode:before {
            content: "\e040";
            }
            .glyphicon-tag:before {
            content: "\e041";
            }
            .glyphicon-tags:before {
            content: "\e042";
            }
            .glyphicon-book:before {
            content: "\e043";
            }
            .glyphicon-bookmark:before {
            content: "\e044";
            }
            .glyphicon-print:before {
            content: "\e045";
            }
            .glyphicon-camera:before {
            content: "\e046";
            }
            .glyphicon-font:before {
            content: "\e047";
            }
            .glyphicon-bold:before {
            content: "\e048";
            }
            .glyphicon-italic:before {
            content: "\e049";
            }
            .glyphicon-text-height:before {
            content: "\e050";
            }
            .glyphicon-text-width:before {
            content: "\e051";
            }
            .glyphicon-align-left:before {
            content: "\e052";
            }
            .glyphicon-align-center:before {
            content: "\e053";
            }
            .glyphicon-align-right:before {
            content: "\e054";
            }
            .glyphicon-align-justify:before {
            content: "\e055";
            }
            .glyphicon-list:before {
            content: "\e056";
            }
            .glyphicon-indent-left:before {
            content: "\e057";
            }
            .glyphicon-indent-right:before {
            content: "\e058";
            }
            .glyphicon-facetime-video:before {
            content: "\e059";
            }
            .glyphicon-picture:before {
            content: "\e060";
            }
            .glyphicon-map-marker:before {
            content: "\e062";
            }
            .glyphicon-adjust:before {
            content: "\e063";
            }
            .glyphicon-tint:before {
            content: "\e064";
            }
            .glyphicon-edit:before {
            content: "\e065";
            }
            .glyphicon-share:before {
            content: "\e066";
            }
            .glyphicon-check:before {
            content: "\e067";
            }
            .glyphicon-move:before {
            content: "\e068";
            }
            .glyphicon-step-backward:before {
            content: "\e069";
            }
            .glyphicon-fast-backward:before {
            content: "\e070";
            }
            .glyphicon-backward:before {
            content: "\e071";
            }
            .glyphicon-play:before {
            content: "\e072";
            }
            .glyphicon-pause:before {
            content: "\e073";
            }
            .glyphicon-stop:before {
            content: "\e074";
            }
            .glyphicon-forward:before {
            content: "\e075";
            }
            .glyphicon-fast-forward:before {
            content: "\e076";
            }
            .glyphicon-step-forward:before {
            content: "\e077";
            }
            .glyphicon-eject:before {
            content: "\e078";
            }
            .glyphicon-chevron-left:before {
            content: "\e079";
            }
            .glyphicon-chevron-right:before {
            content: "\e080";
            }
            .glyphicon-plus-sign:before {
            content: "\e081";
            }
            .glyphicon-minus-sign:before {
            content: "\e082";
            }
            .glyphicon-remove-sign:before {
            content: "\e083";
            }
            .glyphicon-ok-sign:before {
            content: "\e084";
            }
            .glyphicon-question-sign:before {
            content: "\e085";
            }
            .glyphicon-info-sign:before {
            content: "\e086";
            }
            .glyphicon-screenshot:before {
            content: "\e087";
            }
            .glyphicon-remove-circle:before {
            content: "\e088";
            }
            .glyphicon-ok-circle:before {
            content: "\e089";
            }
            .glyphicon-ban-circle:before {
            content: "\e090";
            }
            .glyphicon-arrow-left:before {
            content: "\e091";
            }
            .glyphicon-arrow-right:before {
            content: "\e092";
            }
            .glyphicon-arrow-up:before {
            content: "\e093";
            }
            .glyphicon-arrow-down:before {
            content: "\e094";
            }
            .glyphicon-share-alt:before {
            content: "\e095";
            }
            .glyphicon-resize-full:before {
            content: "\e096";
            }
            .glyphicon-resize-small:before {
            content: "\e097";
            }
            .glyphicon-exclamation-sign:before {
            content: "\e101";
            }
            .glyphicon-gift:before {
            content: "\e102";
            }
            .glyphicon-leaf:before {
            content: "\e103";
            }
            .glyphicon-fire:before {
            content: "\e104";
            }
            .glyphicon-eye-open:before {
            content: "\e105";
            }
            .glyphicon-eye-close:before {
            content: "\e106";
            }
            .glyphicon-warning-sign:before {
            content: "\e107";
            }
            .glyphicon-plane:before {
            content: "\e108";
            }
            .glyphicon-calendar:before {
            content: "\e109";
            }
            .glyphicon-random:before {
            content: "\e110";
            }
            .glyphicon-comment:before {
            content: "\e111";
            }
            .glyphicon-magnet:before {
            content: "\e112";
            }
            .glyphicon-chevron-up:before {
            content: "\e113";
            }
            .glyphicon-chevron-down:before {
            content: "\e114";
            }
            .glyphicon-retweet:before {
            content: "\e115";
            }
            .glyphicon-shopping-cart:before {
            content: "\e116";
            }
            .glyphicon-folder-close:before {
            content: "\e117";
            }
            .glyphicon-folder-open:before {
            content: "\e118";
            }
            .glyphicon-resize-vertical:before {
            content: "\e119";
            }
            .glyphicon-resize-horizontal:before {
            content: "\e120";
            }
            .glyphicon-hdd:before {
            content: "\e121";
            }
            .glyphicon-bullhorn:before {
            content: "\e122";
            }
            .glyphicon-bell:before {
            content: "\e123";
            }
            .glyphicon-certificate:before {
            content: "\e124";
            }
            .glyphicon-thumbs-up:before {
            content: "\e125";
            }
            .glyphicon-thumbs-down:before {
            content: "\e126";
            }
            .glyphicon-hand-right:before {
            content: "\e127";
            }
            .glyphicon-hand-left:before {
            content: "\e128";
            }
            .glyphicon-hand-up:before {
            content: "\e129";
            }
            .glyphicon-hand-down:before {
            content: "\e130";
            }
            .glyphicon-circle-arrow-right:before {
            content: "\e131";
            }
            .glyphicon-circle-arrow-left:before {
            content: "\e132";
            }
            .glyphicon-circle-arrow-up:before {
            content: "\e133";
            }
            .glyphicon-circle-arrow-down:before {
            content: "\e134";
            }
            .glyphicon-globe:before {
            content: "\e135";
            }
            .glyphicon-wrench:before {
            content: "\e136";
            }
            .glyphicon-tasks:before {
            content: "\e137";
            }
            .glyphicon-filter:before {
            content: "\e138";
            }
            .glyphicon-briefcase:before {
            content: "\e139";
            }
            .glyphicon-fullscreen:before {
            content: "\e140";
            }
            .glyphicon-dashboard:before {
            content: "\e141";
            }
            .glyphicon-paperclip:before {
            content: "\e142";
            }
            .glyphicon-heart-empty:before {
            content: "\e143";
            }
            .glyphicon-link:before {
            content: "\e144";
            }
            .glyphicon-phone:before {
            content: "\e145";
            }
            .glyphicon-pushpin:before {
            content: "\e146";
            }
            .glyphicon-usd:before {
            content: "\e148";
            }
            .glyphicon-gbp:before {
            content: "\e149";
            }
            .glyphicon-sort:before {
            content: "\e150";
            }
            .glyphicon-sort-by-alphabet:before {
            content: "\e151";
            }
            .glyphicon-sort-by-alphabet-alt:before {
            content: "\e152";
            }
            .glyphicon-sort-by-order:before {
            content: "\e153";
            }
            .glyphicon-sort-by-order-alt:before {
            content: "\e154";
            }
            .glyphicon-sort-by-attributes:before {
            content: "\e155";
            }
            .glyphicon-sort-by-attributes-alt:before {
            content: "\e156";
            }
            .glyphicon-unchecked:before {
            content: "\e157";
            }
            .glyphicon-expand:before {
            content: "\e158";
            }
            .glyphicon-collapse-down:before {
            content: "\e159";
            }
            .glyphicon-collapse-up:before {
            content: "\e160";
            }
            .glyphicon-log-in:before {
            content: "\e161";
            }
            .glyphicon-flash:before {
            content: "\e162";
            }
            .glyphicon-log-out:before {
            content: "\e163";
            }
            .glyphicon-new-window:before {
            content: "\e164";
            }
            .glyphicon-record:before {
            content: "\e165";
            }
            .glyphicon-save:before {
            content: "\e166";
            }
            .glyphicon-open:before {
            content: "\e167";
            }
            .glyphicon-saved:before {
            content: "\e168";
            }
            .glyphicon-import:before {
            content: "\e169";
            }
            .glyphicon-export:before {
            content: "\e170";
            }
            .glyphicon-send:before {
            content: "\e171";
            }
            .glyphicon-floppy-disk:before {
            content: "\e172";
            }
            .glyphicon-floppy-saved:before {
            content: "\e173";
            }
            .glyphicon-floppy-remove:before {
            content: "\e174";
            }
            .glyphicon-floppy-save:before {
            content: "\e175";
            }
            .glyphicon-floppy-open:before {
            content: "\e176";
            }
            .glyphicon-credit-card:before {
            content: "\e177";
            }
            .glyphicon-transfer:before {
            content: "\e178";
            }
            .glyphicon-cutlery:before {
            content: "\e179";
            }
            .glyphicon-header:before {
            content: "\e180";
            }
            .glyphicon-compressed:before {
            content: "\e181";
            }
            .glyphicon-earphone:before {
            content: "\e182";
            }
            .glyphicon-phone-alt:before {
            content: "\e183";
            }
            .glyphicon-tower:before {
            content: "\e184";
            }
            .glyphicon-stats:before {
            content: "\e185";
            }
            .glyphicon-sd-video:before {
            content: "\e186";
            }
            .glyphicon-hd-video:before {
            content: "\e187";
            }
            .glyphicon-subtitles:before {
            content: "\e188";
            }
            .glyphicon-sound-stereo:before {
            content: "\e189";
            }
            .glyphicon-sound-dolby:before {
            content: "\e190";
            }
            .glyphicon-sound-5-1:before {
            content: "\e191";
            }
            .glyphicon-sound-6-1:before {
            content: "\e192";
            }
            .glyphicon-sound-7-1:before {
            content: "\e193";
            }
            .glyphicon-copyright-mark:before {
            content: "\e194";
            }
            .glyphicon-registration-mark:before {
            content: "\e195";
            }
            .glyphicon-cloud-download:before {
            content: "\e197";
            }
            .glyphicon-cloud-upload:before {
            content: "\e198";
            }
            .glyphicon-tree-conifer:before {
            content: "\e199";
            }
            .glyphicon-tree-deciduous:before {
            content: "\e200";
            }
            .glyphicon-cd:before {
            content: "\e201";
            }
            .glyphicon-save-file:before {
            content: "\e202";
            }
            .glyphicon-open-file:before {
            content: "\e203";
            }
            .glyphicon-level-up:before {
            content: "\e204";
            }
            .glyphicon-copy:before {
            content: "\e205";
            }
            .glyphicon-paste:before {
            content: "\e206";
            }
            .glyphicon-alert:before {
            content: "\e209";
            }
            .glyphicon-equalizer:before {
            content: "\e210";
            }
            .glyphicon-king:before {
            content: "\e211";
            }
            .glyphicon-queen:before {
            content: "\e212";
            }
            .glyphicon-pawn:before {
            content: "\e213";
            }
            .glyphicon-bishop:before {
            content: "\e214";
            }
            .glyphicon-knight:before {
            content: "\e215";
            }
            .glyphicon-baby-formula:before {
            content: "\e216";
            }
            .glyphicon-tent:before {
            content: "\26fa";
            }
            .glyphicon-blackboard:before {
            content: "\e218";
            }
            .glyphicon-bed:before {
            content: "\e219";
            }
            .glyphicon-apple:before {
            content: "\f8ff";
            }
            .glyphicon-erase:before {
            content: "\e221";
            }
            .glyphicon-hourglass:before {
            content: "\231b";
            }
            .glyphicon-lamp:before {
            content: "\e223";
            }
            .glyphicon-duplicate:before {
            content: "\e224";
            }
            .glyphicon-piggy-bank:before {
            content: "\e225";
            }
            .glyphicon-scissors:before {
            content: "\e226";
            }
            .glyphicon-bitcoin:before {
            content: "\e227";
            }
            .glyphicon-btc:before {
            content: "\e227";
            }
            .glyphicon-xbt:before {
            content: "\e227";
            }
            .glyphicon-yen:before {
            content: "\00a5";
            }
            .glyphicon-jpy:before {
            content: "\00a5";
            }
            .glyphicon-ruble:before {
            content: "\20bd";
            }
            .glyphicon-rub:before {
            content: "\20bd";
            }
            .glyphicon-scale:before {
            content: "\e230";
            }
            .glyphicon-ice-lolly:before {
            content: "\e231";
            }
            .glyphicon-ice-lolly-tasted:before {
            content: "\e232";
            }
            .glyphicon-education:before {
            content: "\e233";
            }
            .glyphicon-option-horizontal:before {
            content: "\e234";
            }
            .glyphicon-option-vertical:before {
            content: "\e235";
            }
            .glyphicon-menu-hamburger:before {
            content: "\e236";
            }
            .glyphicon-modal-window:before {
            content: "\e237";
            }
            .glyphicon-oil:before {
            content: "\e238";
            }
            .glyphicon-grain:before {
            content: "\e239";
            }
            .glyphicon-sunglasses:before {
            content: "\e240";
            }
            .glyphicon-text-size:before {
            content: "\e241";
            }
            .glyphicon-text-color:before {
            content: "\e242";
            }
            .glyphicon-text-background:before {
            content: "\e243";
            }
            .glyphicon-object-align-top:before {
            content: "\e244";
            }
            .glyphicon-object-align-bottom:before {
            content: "\e245";
            }
            .glyphicon-object-align-horizontal:before {
            content: "\e246";
            }
            .glyphicon-object-align-left:before {
            content: "\e247";
            }
            .glyphicon-object-align-vertical:before {
            content: "\e248";
            }
            .glyphicon-object-align-right:before {
            content: "\e249";
            }
            .glyphicon-triangle-right:before {
            content: "\e250";
            }
            .glyphicon-triangle-left:before {
            content: "\e251";
            }
            .glyphicon-triangle-bottom:before {
            content: "\e252";
            }
            .glyphicon-triangle-top:before {
            content: "\e253";
            }
            .glyphicon-console:before {
            content: "\e254";
            }
            .glyphicon-superscript:before {
            content: "\e255";
            }
            .glyphicon-subscript:before {
            content: "\e256";
            }
            .glyphicon-menu-left:before {
            content: "\e257";
            }
            .glyphicon-menu-right:before {
            content: "\e258";
            }
            .glyphicon-menu-down:before {
            content: "\e259";
            }
            .glyphicon-menu-up:before {
            content: "\e260";
            }
            * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            *:before,
            *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }
            body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1.42857143;
            color: #949494;
            background-color: #fff;
            }
            input,
            button,
            select,
            textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            }
            a {
            color: #373e4a;
            text-decoration: none;
            }
            a:hover,
            a:focus {
            color: #818da2;
            text-decoration: none;
            }
            a:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
            }
            figure {
            margin: 0;
            }
            img {
            vertical-align: middle;
            }
            .img-responsive,
            .thumbnail > img,
            .thumbnail a > img,
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
            display: block;
            max-width: 100%;
            height: auto;
            }
            .img-rounded {
            border-radius: 3px;
            }
            .img-thumbnail {
            padding: 4px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ededf0;
            border-radius: 3px;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            display: inline-block;
            max-width: 100%;
            height: auto;
            }
            .img-circle {
            border-radius: 50%;
            }
            hr {
            margin-top: 17px;
            margin-bottom: 17px;
            border: 0;
            border-top: 1px solid #eeeeee;
            }
            .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
            }
            .sr-only-focusable:active,
            .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto;
            }
            [role="button"] {
            cursor: pointer;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: #373e4a;
            }
            h1 small,
            h2 small,
            h3 small,
            h4 small,
            h5 small,
            h6 small,
            .h1 small,
            .h2 small,
            .h3 small,
            .h4 small,
            .h5 small,
            .h6 small,
            h1 .small,
            h2 .small,
            h3 .small,
            h4 .small,
            h5 .small,
            h6 .small,
            .h1 .small,
            .h2 .small,
            .h3 .small,
            .h4 .small,
            .h5 .small,
            .h6 .small {
            font-weight: normal;
            line-height: 1;
            color: #999999;
            }
            h1,
            .h1,
            h2,
            .h2,
            h3,
            .h3 {
            margin-top: 17px;
            margin-bottom: 8.5px;
            }
            h1 small,
            .h1 small,
            h2 small,
            .h2 small,
            h3 small,
            .h3 small,
            h1 .small,
            .h1 .small,
            h2 .small,
            .h2 .small,
            h3 .small,
            .h3 .small {
            font-size: 65%;
            }
            h4,
            .h4,
            h5,
            .h5,
            h6,
            .h6 {
            margin-top: 8.5px;
            margin-bottom: 8.5px;
            }
            h4 small,
            .h4 small,
            h5 small,
            .h5 small,
            h6 small,
            .h6 small,
            h4 .small,
            .h4 .small,
            h5 .small,
            .h5 .small,
            h6 .small,
            .h6 .small {
            font-size: 75%;
            }
            h1,
            .h1 {
            font-size: 31px;
            }
            h2,
            .h2 {
            font-size: 25px;
            }
            h3,
            .h3 {
            font-size: 21px;
            }
            h4,
            .h4 {
            font-size: 15px;
            }
            h5,
            .h5 {
            font-size: 12px;
            }
            h6,
            .h6 {
            font-size: 11px;
            }
            p {
            margin: 0 0 8.5px;
            }
            .lead {
            margin-bottom: 17px;
            font-size: 13px;
            font-weight: 300;
            line-height: 1.4;
            }
            @media (min-width: 768px) {
            .lead {
                font-size: 18px;
            }
            }
            small,
            .small {
            font-size: 91%;
            }
            mark,
            .mark {
            background-color: #ffefa4;
            padding: .2em;
            }
            .text-left {
            text-align: left;
            }
            .text-right {
            text-align: right;
            }
            .text-center {
            text-align: center;
            }
            .text-justify {
            text-align: justify;
            }
            .text-nowrap {
            white-space: nowrap;
            }
            .text-lowercase {
            text-transform: lowercase;
            }
            .text-uppercase {
            text-transform: uppercase;
            }
            .text-capitalize {
            text-transform: capitalize;
            }
            .text-muted {
            color: #999999;
            }
            .text-primary {
            color: #949494;
            }
            a.text-primary:hover,
            a.text-primary:focus {
            color: #7b7b7b;
            }
            .text-success {
            color: #045702;
            }
            a.text-success:hover,
            a.text-success:focus {
            color: #022501;
            }
            .text-info {
            color: #2c7ea1;
            }
            a.text-info:hover,
            a.text-info:focus {
            color: #215f79;
            }
            .text-warning {
            color: #574802;
            }
            a.text-warning:hover,
            a.text-warning:focus {
            color: #251f01;
            }
            .text-danger {
            color: #ac1818;
            }
            a.text-danger:hover,
            a.text-danger:focus {
            color: #7f1212;
            }
            .bg-primary {
            color: #fff;
            background-color: #949494;
            }
            a.bg-primary:hover,
            a.bg-primary:focus {
            background-color: #7b7b7b;
            }
            .bg-success {
            background-color: #bdedbc;
            }
            a.bg-success:hover,
            a.bg-success:focus {
            background-color: #95e294;
            }
            .bg-info {
            background-color: #c5e8f7;
            }
            a.bg-info:hover,
            a.bg-info:focus {
            background-color: #98d6f1;
            }
            .bg-warning {
            background-color: #ffefa4;
            }
            a.bg-warning:hover,
            a.bg-warning:focus {
            background-color: #ffe671;
            }
            .bg-danger {
            background-color: #ffc9c9;
            }
            a.bg-danger:hover,
            a.bg-danger:focus {
            background-color: #ff9696;
            }
            .page-header {
            padding-bottom: 7.5px;
            margin: 34px 0 17px;
            border-bottom: 1px solid #eeeeee;
            }
            ul,
            ol {
            margin-top: 0;
            margin-bottom: 8.5px;
            }
            ul ul,
            ol ul,
            ul ol,
            ol ol {
            margin-bottom: 0;
            }
            .list-unstyled {
            padding-left: 0;
            list-style: none;
            }
            .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px;
            }
            .list-inline > li {
            display: inline-block;
            padding-left: 5px;
            padding-right: 5px;
            }
            dl {
            margin-top: 0;
            margin-bottom: 17px;
            }
            dt,
            dd {
            line-height: 1.42857143;
            }
            dt {
            font-weight: bold;
            }
            dd {
            margin-left: 0;
            }
            @media (min-width: 768px) {
            .dl-horizontal dt {
                float: left;
                width: 160px;
                clear: left;
                text-align: right;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            .dl-horizontal dd {
                margin-left: 180px;
            }
            }
            abbr[title],
            abbr[data-original-title] {
            cursor: help;
            border-bottom: 1px dotted #999999;
            }
            .initialism {
            font-size: 90%;
            text-transform: uppercase;
            }
            blockquote {
            padding: 8.5px 17px;
            margin: 0 0 17px;
            font-size: 15px;
            border-left: 5px solid #eeeeee;
            }
            blockquote p:last-child,
            blockquote ul:last-child,
            blockquote ol:last-child {
            margin-bottom: 0;
            }
            blockquote footer,
            blockquote small,
            blockquote .small {
            display: block;
            font-size: 80%;
            line-height: 1.42857143;
            color: #999999;
            }
            blockquote footer:before,
            blockquote small:before,
            blockquote .small:before {
            content: '\2014 \00A0';
            }
            .blockquote-reverse,
            blockquote.pull-right {
            padding-right: 15px;
            padding-left: 0;
            border-right: 5px solid #eeeeee;
            border-left: 0;
            text-align: right;
            }
            .blockquote-reverse footer:before,
            blockquote.pull-right footer:before,
            .blockquote-reverse small:before,
            blockquote.pull-right small:before,
            .blockquote-reverse .small:before,
            blockquote.pull-right .small:before {
            content: '';
            }
            .blockquote-reverse footer:after,
            blockquote.pull-right footer:after,
            .blockquote-reverse small:after,
            blockquote.pull-right small:after,
            .blockquote-reverse .small:after,
            blockquote.pull-right .small:after {
            content: '\00A0 \2014';
            }
            address {
            margin-bottom: 17px;
            font-style: normal;
            line-height: 1.42857143;
            }
            code,
            kbd,
            pre,
            samp {
            font-family: "Noto Sans", Monaco, Consolas, "Courier New", monospace;
            }
            code {
            padding: 2px 4px;
            font-size: 90%;
            color: #c7254e;
            background-color: #f9f2f4;
            border-radius: 3px;
            }
            kbd {
            padding: 2px 4px;
            font-size: 90%;
            color: #fff;
            background-color: #333;
            border-radius: 2px;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
            }
            kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: bold;
            box-shadow: none;
            }
            pre {
            display: block;
            padding: 8px;
            margin: 0 0 8.5px;
            font-size: 11px;
            line-height: 1.42857143;
            word-break: break-all;
            word-wrap: break-word;
            color: #7d8086;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 3px;
            }
            pre code {
            padding: 0;
            font-size: inherit;
            color: inherit;
            white-space: pre-wrap;
            background-color: transparent;
            border-radius: 0;
            }
            .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
            }
            .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            }
            @media (min-width: 768px) {
            .container {
                width: 750px;
            }
            }
            @media (min-width: 992px) {
            .container {
                width: 970px;
            }
            }
            @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
            }
            .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            }
            .row {
            margin-left: -15px;
            margin-right: -15px;
            }
            .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            }
            .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
            float: left;
            }
            .col-xs-12 {
            width: 100%;
            }
            .col-xs-11 {
            width: 91.66666667%;
            }
            .col-xs-10 {
            width: 83.33333333%;
            }
            .col-xs-9 {
            width: 75%;
            }
            .col-xs-8 {
            width: 66.66666667%;
            }
            .col-xs-7 {
            width: 58.33333333%;
            }
            .col-xs-6 {
            width: 50%;
            }
            .col-xs-5 {
            width: 41.66666667%;
            }
            .col-xs-4 {
            width: 33.33333333%;
            }
            .col-xs-3 {
            width: 25%;
            }
            .col-xs-2 {
            width: 16.66666667%;
            }
            .col-xs-1 {
            width: 8.33333333%;
            }
            .col-xs-pull-12 {
            right: 100%;
            }
            .col-xs-pull-11 {
            right: 91.66666667%;
            }
            .col-xs-pull-10 {
            right: 83.33333333%;
            }
            .col-xs-pull-9 {
            right: 75%;
            }
            .col-xs-pull-8 {
            right: 66.66666667%;
            }
            .col-xs-pull-7 {
            right: 58.33333333%;
            }
            .col-xs-pull-6 {
            right: 50%;
            }
            .col-xs-pull-5 {
            right: 41.66666667%;
            }
            .col-xs-pull-4 {
            right: 33.33333333%;
            }
            .col-xs-pull-3 {
            right: 25%;
            }
            .col-xs-pull-2 {
            right: 16.66666667%;
            }
            .col-xs-pull-1 {
            right: 8.33333333%;
            }
            .col-xs-pull-0 {
            right: auto;
            }
            .col-xs-push-12 {
            left: 100%;
            }
            .col-xs-push-11 {
            left: 91.66666667%;
            }
            .col-xs-push-10 {
            left: 83.33333333%;
            }
            .col-xs-push-9 {
            left: 75%;
            }
            .col-xs-push-8 {
            left: 66.66666667%;
            }
            .col-xs-push-7 {
            left: 58.33333333%;
            }
            .col-xs-push-6 {
            left: 50%;
            }
            .col-xs-push-5 {
            left: 41.66666667%;
            }
            .col-xs-push-4 {
            left: 33.33333333%;
            }
            .col-xs-push-3 {
            left: 25%;
            }
            .col-xs-push-2 {
            left: 16.66666667%;
            }
            .col-xs-push-1 {
            left: 8.33333333%;
            }
            .col-xs-push-0 {
            left: auto;
            }
            .col-xs-offset-12 {
            margin-left: 100%;
            }
            .col-xs-offset-11 {
            margin-left: 91.66666667%;
            }
            .col-xs-offset-10 {
            margin-left: 83.33333333%;
            }
            .col-xs-offset-9 {
            margin-left: 75%;
            }
            .col-xs-offset-8 {
            margin-left: 66.66666667%;
            }
            .col-xs-offset-7 {
            margin-left: 58.33333333%;
            }
            .col-xs-offset-6 {
            margin-left: 50%;
            }
            .col-xs-offset-5 {
            margin-left: 41.66666667%;
            }
            .col-xs-offset-4 {
            margin-left: 33.33333333%;
            }
            .col-xs-offset-3 {
            margin-left: 25%;
            }
            .col-xs-offset-2 {
            margin-left: 16.66666667%;
            }
            .col-xs-offset-1 {
            margin-left: 8.33333333%;
            }
            .col-xs-offset-0 {
            margin-left: 0%;
            }
            @media (min-width: 768px) {
            .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                float: left;
            }
            .col-sm-12 {
                width: 100%;
            }
            .col-sm-11 {
                width: 91.66666667%;
            }
            .col-sm-10 {
                width: 83.33333333%;
            }
            .col-sm-9 {
                width: 75%;
            }
            .col-sm-8 {
                width: 66.66666667%;
            }
            .col-sm-7 {
                width: 58.33333333%;
            }
            .col-sm-6 {
                width: 50%;
            }
            .col-sm-5 {
                width: 41.66666667%;
            }
            .col-sm-4 {
                width: 33.33333333%;
            }
            .col-sm-3 {
                width: 25%;
            }
            .col-sm-2 {
                width: 16.66666667%;
            }
            .col-sm-1 {
                width: 8.33333333%;
            }
            .col-sm-pull-12 {
                right: 100%;
            }
            .col-sm-pull-11 {
                right: 91.66666667%;
            }
            .col-sm-pull-10 {
                right: 83.33333333%;
            }
            .col-sm-pull-9 {
                right: 75%;
            }
            .col-sm-pull-8 {
                right: 66.66666667%;
            }
            .col-sm-pull-7 {
                right: 58.33333333%;
            }
            .col-sm-pull-6 {
                right: 50%;
            }
            .col-sm-pull-5 {
                right: 41.66666667%;
            }
            .col-sm-pull-4 {
                right: 33.33333333%;
            }
            .col-sm-pull-3 {
                right: 25%;
            }
            .col-sm-pull-2 {
                right: 16.66666667%;
            }
            .col-sm-pull-1 {
                right: 8.33333333%;
            }
            .col-sm-pull-0 {
                right: auto;
            }
            .col-sm-push-12 {
                left: 100%;
            }
            .col-sm-push-11 {
                left: 91.66666667%;
            }
            .col-sm-push-10 {
                left: 83.33333333%;
            }
            .col-sm-push-9 {
                left: 75%;
            }
            .col-sm-push-8 {
                left: 66.66666667%;
            }
            .col-sm-push-7 {
                left: 58.33333333%;
            }
            .col-sm-push-6 {
                left: 50%;
            }
            .col-sm-push-5 {
                left: 41.66666667%;
            }
            .col-sm-push-4 {
                left: 33.33333333%;
            }
            .col-sm-push-3 {
                left: 25%;
            }
            .col-sm-push-2 {
                left: 16.66666667%;
            }
            .col-sm-push-1 {
                left: 8.33333333%;
            }
            .col-sm-push-0 {
                left: auto;
            }
            .col-sm-offset-12 {
                margin-left: 100%;
            }
            .col-sm-offset-11 {
                margin-left: 91.66666667%;
            }
            .col-sm-offset-10 {
                margin-left: 83.33333333%;
            }
            .col-sm-offset-9 {
                margin-left: 75%;
            }
            .col-sm-offset-8 {
                margin-left: 66.66666667%;
            }
            .col-sm-offset-7 {
                margin-left: 58.33333333%;
            }
            .col-sm-offset-6 {
                margin-left: 50%;
            }
            .col-sm-offset-5 {
                margin-left: 41.66666667%;
            }
            .col-sm-offset-4 {
                margin-left: 33.33333333%;
            }
            .col-sm-offset-3 {
                margin-left: 25%;
            }
            .col-sm-offset-2 {
                margin-left: 16.66666667%;
            }
            .col-sm-offset-1 {
                margin-left: 8.33333333%;
            }
            .col-sm-offset-0 {
                margin-left: 0%;
            }
            }
            @media (min-width: 992px) {
            .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
                float: left;
            }
            .col-md-12 {
                width: 100%;
            }
            .col-md-11 {
                width: 91.66666667%;
            }
            .col-md-10 {
                width: 83.33333333%;
            }
            .col-md-9 {
                width: 75%;
            }
            .col-md-8 {
                width: 66.66666667%;
            }
            .col-md-7 {
                width: 58.33333333%;
            }
            .col-md-6 {
                width: 50%;
            }
            .col-md-5 {
                width: 41.66666667%;
            }
            .col-md-4 {
                width: 33.33333333%;
            }
            .col-md-3 {
                width: 25%;
            }
            .col-md-2 {
                width: 16.66666667%;
            }
            .col-md-1 {
                width: 8.33333333%;
            }
            .col-md-pull-12 {
                right: 100%;
            }
            .col-md-pull-11 {
                right: 91.66666667%;
            }
            .col-md-pull-10 {
                right: 83.33333333%;
            }
            .col-md-pull-9 {
                right: 75%;
            }
            .col-md-pull-8 {
                right: 66.66666667%;
            }
            .col-md-pull-7 {
                right: 58.33333333%;
            }
            .col-md-pull-6 {
                right: 50%;
            }
            .col-md-pull-5 {
                right: 41.66666667%;
            }
            .col-md-pull-4 {
                right: 33.33333333%;
            }
            .col-md-pull-3 {
                right: 25%;
            }
            .col-md-pull-2 {
                right: 16.66666667%;
            }
            .col-md-pull-1 {
                right: 8.33333333%;
            }
            .col-md-pull-0 {
                right: auto;
            }
            .col-md-push-12 {
                left: 100%;
            }
            .col-md-push-11 {
                left: 91.66666667%;
            }
            .col-md-push-10 {
                left: 83.33333333%;
            }
            .col-md-push-9 {
                left: 75%;
            }
            .col-md-push-8 {
                left: 66.66666667%;
            }
            .col-md-push-7 {
                left: 58.33333333%;
            }
            .col-md-push-6 {
                left: 50%;
            }
            .col-md-push-5 {
                left: 41.66666667%;
            }
            .col-md-push-4 {
                left: 33.33333333%;
            }
            .col-md-push-3 {
                left: 25%;
            }
            .col-md-push-2 {
                left: 16.66666667%;
            }
            .col-md-push-1 {
                left: 8.33333333%;
            }
            .col-md-push-0 {
                left: auto;
            }
            .col-md-offset-12 {
                margin-left: 100%;
            }
            .col-md-offset-11 {
                margin-left: 91.66666667%;
            }
            .col-md-offset-10 {
                margin-left: 83.33333333%;
            }
            .col-md-offset-9 {
                margin-left: 75%;
            }
            .col-md-offset-8 {
                margin-left: 66.66666667%;
            }
            .col-md-offset-7 {
                margin-left: 58.33333333%;
            }
            .col-md-offset-6 {
                margin-left: 50%;
            }
            .col-md-offset-5 {
                margin-left: 41.66666667%;
            }
            .col-md-offset-4 {
                margin-left: 33.33333333%;
            }
            .col-md-offset-3 {
                margin-left: 25%;
            }
            .col-md-offset-2 {
                margin-left: 16.66666667%;
            }
            .col-md-offset-1 {
                margin-left: 8.33333333%;
            }
            .col-md-offset-0 {
                margin-left: 0%;
            }
            }
            @media (min-width: 1200px) {
            .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
                float: left;
            }
            .col-lg-12 {
                width: 100%;
            }
            .col-lg-11 {
                width: 91.66666667%;
            }
            .col-lg-10 {
                width: 83.33333333%;
            }
            .col-lg-9 {
                width: 75%;
            }
            .col-lg-8 {
                width: 66.66666667%;
            }
            .col-lg-7 {
                width: 58.33333333%;
            }
            .col-lg-6 {
                width: 50%;
            }
            .col-lg-5 {
                width: 41.66666667%;
            }
            .col-lg-4 {
                width: 33.33333333%;
            }
            .col-lg-3 {
                width: 25%;
            }
            .col-lg-2 {
                width: 16.66666667%;
            }
            .col-lg-1 {
                width: 8.33333333%;
            }
            .col-lg-pull-12 {
                right: 100%;
            }
            .col-lg-pull-11 {
                right: 91.66666667%;
            }
            .col-lg-pull-10 {
                right: 83.33333333%;
            }
            .col-lg-pull-9 {
                right: 75%;
            }
            .col-lg-pull-8 {
                right: 66.66666667%;
            }
            .col-lg-pull-7 {
                right: 58.33333333%;
            }
            .col-lg-pull-6 {
                right: 50%;
            }
            .col-lg-pull-5 {
                right: 41.66666667%;
            }
            .col-lg-pull-4 {
                right: 33.33333333%;
            }
            .col-lg-pull-3 {
                right: 25%;
            }
            .col-lg-pull-2 {
                right: 16.66666667%;
            }
            .col-lg-pull-1 {
                right: 8.33333333%;
            }
            .col-lg-pull-0 {
                right: auto;
            }
            .col-lg-push-12 {
                left: 100%;
            }
            .col-lg-push-11 {
                left: 91.66666667%;
            }
            .col-lg-push-10 {
                left: 83.33333333%;
            }
            .col-lg-push-9 {
                left: 75%;
            }
            .col-lg-push-8 {
                left: 66.66666667%;
            }
            .col-lg-push-7 {
                left: 58.33333333%;
            }
            .col-lg-push-6 {
                left: 50%;
            }
            .col-lg-push-5 {
                left: 41.66666667%;
            }
            .col-lg-push-4 {
                left: 33.33333333%;
            }
            .col-lg-push-3 {
                left: 25%;
            }
            .col-lg-push-2 {
                left: 16.66666667%;
            }
            .col-lg-push-1 {
                left: 8.33333333%;
            }
            .col-lg-push-0 {
                left: auto;
            }
            .col-lg-offset-12 {
                margin-left: 100%;
            }
            .col-lg-offset-11 {
                margin-left: 91.66666667%;
            }
            .col-lg-offset-10 {
                margin-left: 83.33333333%;
            }
            .col-lg-offset-9 {
                margin-left: 75%;
            }
            .col-lg-offset-8 {
                margin-left: 66.66666667%;
            }
            .col-lg-offset-7 {
                margin-left: 58.33333333%;
            }
            .col-lg-offset-6 {
                margin-left: 50%;
            }
            .col-lg-offset-5 {
                margin-left: 41.66666667%;
            }
            .col-lg-offset-4 {
                margin-left: 33.33333333%;
            }
            .col-lg-offset-3 {
                margin-left: 25%;
            }
            .col-lg-offset-2 {
                margin-left: 16.66666667%;
            }
            .col-lg-offset-1 {
                margin-left: 8.33333333%;
            }
            .col-lg-offset-0 {
                margin-left: 0%;
            }
            }
            table {
            background-color: transparent;
            }
            caption {
            padding-top: 8px;
            padding-bottom: 8px;
            color: #999999;
            text-align: left;
            }
            th {
            text-align: left;
            }
            .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 17px;
            }
            .table > thead > tr > th,
            .table > tbody > tr > th,
            .table > tfoot > tr > th,
            .table > thead > tr > td,
            .table > tbody > tr > td,
            .table > tfoot > tr > td {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ebebeb;
            }
            .table > thead > tr > th {
            vertical-align: bottom;
            border-bottom: 2px solid #ebebeb;
            }
            .table > caption + thead > tr:first-child > th,
            .table > colgroup + thead > tr:first-child > th,
            .table > thead:first-child > tr:first-child > th,
            .table > caption + thead > tr:first-child > td,
            .table > colgroup + thead > tr:first-child > td,
            .table > thead:first-child > tr:first-child > td {
            border-top: 0;
            }
            .table > tbody + tbody {
            border-top: 2px solid #ebebeb;
            }
            .table .table {
            background-color: #fff;
            }
            .table-condensed > thead > tr > th,
            .table-condensed > tbody > tr > th,
            .table-condensed > tfoot > tr > th,
            .table-condensed > thead > tr > td,
            .table-condensed > tbody > tr > td,
            .table-condensed > tfoot > tr > td {
            padding: 5px;
            }
            .table-bordered {
            border: 1px solid #ebebeb;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
            border: 1px solid #ebebeb;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > thead > tr > td {
            border-bottom-width: 2px;
            }
            .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #f9f9f9;
            }
            .table-hover > tbody > tr:hover {
            background-color: #f5f5f5;
            }
            table col[class*="col-"] {
            position: static;
            float: none;
            display: table-column;
            }
            table td[class*="col-"],
            table th[class*="col-"] {
            position: static;
            float: none;
            display: table-cell;
            }
            .table > thead > tr > td.active,
            .table > tbody > tr > td.active,
            .table > tfoot > tr > td.active,
            .table > thead > tr > th.active,
            .table > tbody > tr > th.active,
            .table > tfoot > tr > th.active,
            .table > thead > tr.active > td,
            .table > tbody > tr.active > td,
            .table > tfoot > tr.active > td,
            .table > thead > tr.active > th,
            .table > tbody > tr.active > th,
            .table > tfoot > tr.active > th {
            background-color: #f5f5f5;
            }
            .table-hover > tbody > tr > td.active:hover,
            .table-hover > tbody > tr > th.active:hover,
            .table-hover > tbody > tr.active:hover > td,
            .table-hover > tbody > tr:hover > .active,
            .table-hover > tbody > tr.active:hover > th {
            background-color: #e8e8e8;
            }
            .table > thead > tr > td.success,
            .table > tbody > tr > td.success,
            .table > tfoot > tr > td.success,
            .table > thead > tr > th.success,
            .table > tbody > tr > th.success,
            .table > tfoot > tr > th.success,
            .table > thead > tr.success > td,
            .table > tbody > tr.success > td,
            .table > tfoot > tr.success > td,
            .table > thead > tr.success > th,
            .table > tbody > tr.success > th,
            .table > tfoot > tr.success > th {
            background-color: #bdedbc;
            }
            .table-hover > tbody > tr > td.success:hover,
            .table-hover > tbody > tr > th.success:hover,
            .table-hover > tbody > tr.success:hover > td,
            .table-hover > tbody > tr:hover > .success,
            .table-hover > tbody > tr.success:hover > th {
            background-color: #a9e8a8;
            }
            .table > thead > tr > td.info,
            .table > tbody > tr > td.info,
            .table > tfoot > tr > td.info,
            .table > thead > tr > th.info,
            .table > tbody > tr > th.info,
            .table > tfoot > tr > th.info,
            .table > thead > tr.info > td,
            .table > tbody > tr.info > td,
            .table > tfoot > tr.info > td,
            .table > thead > tr.info > th,
            .table > tbody > tr.info > th,
            .table > tfoot > tr.info > th {
            background-color: #c5e8f7;
            }
            .table-hover > tbody > tr > td.info:hover,
            .table-hover > tbody > tr > th.info:hover,
            .table-hover > tbody > tr.info:hover > td,
            .table-hover > tbody > tr:hover > .info,
            .table-hover > tbody > tr.info:hover > th {
            background-color: #afdff4;
            }
            .table > thead > tr > td.warning,
            .table > tbody > tr > td.warning,
            .table > tfoot > tr > td.warning,
            .table > thead > tr > th.warning,
            .table > tbody > tr > th.warning,
            .table > tfoot > tr > th.warning,
            .table > thead > tr.warning > td,
            .table > tbody > tr.warning > td,
            .table > tfoot > tr.warning > td,
            .table > thead > tr.warning > th,
            .table > tbody > tr.warning > th,
            .table > tfoot > tr.warning > th {
            background-color: #ffefa4;
            }
            .table-hover > tbody > tr > td.warning:hover,
            .table-hover > tbody > tr > th.warning:hover,
            .table-hover > tbody > tr.warning:hover > td,
            .table-hover > tbody > tr:hover > .warning,
            .table-hover > tbody > tr.warning:hover > th {
            background-color: #ffeb8a;
            }
            .table > thead > tr > td.danger,
            .table > tbody > tr > td.danger,
            .table > tfoot > tr > td.danger,
            .table > thead > tr > th.danger,
            .table > tbody > tr > th.danger,
            .table > tfoot > tr > th.danger,
            .table > thead > tr.danger > td,
            .table > tbody > tr.danger > td,
            .table > tfoot > tr.danger > td,
            .table > thead > tr.danger > th,
            .table > tbody > tr.danger > th,
            .table > tfoot > tr.danger > th {
            background-color: #ffc9c9;
            }
            .table-hover > tbody > tr > td.danger:hover,
            .table-hover > tbody > tr > th.danger:hover,
            .table-hover > tbody > tr.danger:hover > td,
            .table-hover > tbody > tr:hover > .danger,
            .table-hover > tbody > tr.danger:hover > th {
            background-color: #ffafaf;
            }
            .table-responsive {
            overflow-x: auto;
            min-height: 0.01%;
            }
            @media screen and (max-width: 767px) {
            .table-responsive {
                width: 100%;
                margin-bottom: 12.75px;
                overflow-y: hidden;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #ebebeb;
            }
            .table-responsive > .table {
                margin-bottom: 0;
            }
            .table-responsive > .table > thead > tr > th,
            .table-responsive > .table > tbody > tr > th,
            .table-responsive > .table > tfoot > tr > th,
            .table-responsive > .table > thead > tr > td,
            .table-responsive > .table > tbody > tr > td,
            .table-responsive > .table > tfoot > tr > td {
                white-space: nowrap;
            }
            .table-responsive > .table-bordered {
                border: 0;
            }
            .table-responsive > .table-bordered > thead > tr > th:first-child,
            .table-responsive > .table-bordered > tbody > tr > th:first-child,
            .table-responsive > .table-bordered > tfoot > tr > th:first-child,
            .table-responsive > .table-bordered > thead > tr > td:first-child,
            .table-responsive > .table-bordered > tbody > tr > td:first-child,
            .table-responsive > .table-bordered > tfoot > tr > td:first-child {
                border-left: 0;
            }
            .table-responsive > .table-bordered > thead > tr > th:last-child,
            .table-responsive > .table-bordered > tbody > tr > th:last-child,
            .table-responsive > .table-bordered > tfoot > tr > th:last-child,
            .table-responsive > .table-bordered > thead > tr > td:last-child,
            .table-responsive > .table-bordered > tbody > tr > td:last-child,
            .table-responsive > .table-bordered > tfoot > tr > td:last-child {
                border-right: 0;
            }
            .table-responsive > .table-bordered > tbody > tr:last-child > th,
            .table-responsive > .table-bordered > tfoot > tr:last-child > th,
            .table-responsive > .table-bordered > tbody > tr:last-child > td,
            .table-responsive > .table-bordered > tfoot > tr:last-child > td {
                border-bottom: 0;
            }
            }
            fieldset {
            padding: 0;
            margin: 0;
            border: 0;
            min-width: 0;
            }
            legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 17px;
            font-size: 18px;
            line-height: inherit;
            color: #7d8086;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
            }
            label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: bold;
            }
            input[type="search"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            input[type="radio"],
            input[type="checkbox"] {
            margin: 4px 0 0;
            margin-top: 1px \9;
            line-height: normal;
            }
            input[type="file"] {
            display: block;
            }
            input[type="range"] {
            display: block;
            width: 100%;
            }
            select[multiple],
            select[size] {
            height: auto;
            }
            input[type="file"]:focus,
            input[type="radio"]:focus,
            input[type="checkbox"]:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
            }
            output {
            display: block;
            padding-top: 7px;
            font-size: 12px;
            line-height: 1.42857143;
            color: #555555;
            }
            .form-control {
            display: block;
            width: 100%;
            height: 31px;
            padding: 6px 12px;
            font-size: 12px;
            line-height: 1.42857143;
            color: #555555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ebebeb;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            }
            .form-control:focus {
            border-color: #cbd0d9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(203, 208, 217, 0.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(203, 208, 217, 0.6);
            }
            .form-control::-moz-placeholder {
            color: #999999;
            opacity: 1;
            }
            .form-control:-ms-input-placeholder {
            color: #999999;
            }
            .form-control::-webkit-input-placeholder {
            color: #999999;
            }
            .form-control::-ms-expand {
            border: 0;
            background-color: transparent;
            }
            .form-control[disabled],
            .form-control[readonly],
            fieldset[disabled] .form-control {
            background-color: #eeeeee;
            opacity: 1;
            }
            .form-control[disabled],
            fieldset[disabled] .form-control {
            cursor: not-allowed;
            }
            textarea.form-control {
            height: auto;
            }
            input[type="search"] {
            -webkit-appearance: none;
            }
            @media screen and (-webkit-min-device-pixel-ratio: 0) {
            input[type="date"].form-control,
            input[type="time"].form-control,
            input[type="datetime-local"].form-control,
            input[type="month"].form-control {
                line-height: 31px;
            }
            input[type="date"].input-sm,
            input[type="time"].input-sm,
            input[type="datetime-local"].input-sm,
            input[type="month"].input-sm,
            .input-group-sm input[type="date"],
            .input-group-sm input[type="time"],
            .input-group-sm input[type="datetime-local"],
            .input-group-sm input[type="month"] {
                line-height: 28px;
            }
            input[type="date"].input-lg,
            input[type="time"].input-lg,
            input[type="datetime-local"].input-lg,
            input[type="month"].input-lg,
            .input-group-lg input[type="date"],
            .input-group-lg input[type="time"],
            .input-group-lg input[type="datetime-local"],
            .input-group-lg input[type="month"] {
                line-height: 42px;
            }
            }
            .form-group {
            margin-bottom: 15px;
            }
            .radio,
            .checkbox {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
            }
            .radio label,
            .checkbox label {
            min-height: 17px;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: normal;
            cursor: pointer;
            }
            .radio input[type="radio"],
            .radio-inline input[type="radio"],
            .checkbox input[type="checkbox"],
            .checkbox-inline input[type="checkbox"] {
            position: absolute;
            margin-left: -20px;
            margin-top: 4px \9;
            }
            .radio + .radio,
            .checkbox + .checkbox {
            margin-top: -5px;
            }
            .radio-inline,
            .checkbox-inline {
            position: relative;
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            vertical-align: middle;
            font-weight: normal;
            cursor: pointer;
            }
            .radio-inline + .radio-inline,
            .checkbox-inline + .checkbox-inline {
            margin-top: 0;
            margin-left: 10px;
            }
            input[type="radio"][disabled],
            input[type="checkbox"][disabled],
            input[type="radio"].disabled,
            input[type="checkbox"].disabled,
            fieldset[disabled] input[type="radio"],
            fieldset[disabled] input[type="checkbox"] {
            cursor: not-allowed;
            }
            .radio-inline.disabled,
            .checkbox-inline.disabled,
            fieldset[disabled] .radio-inline,
            fieldset[disabled] .checkbox-inline {
            cursor: not-allowed;
            }
            .radio.disabled label,
            .checkbox.disabled label,
            fieldset[disabled] .radio label,
            fieldset[disabled] .checkbox label {
            cursor: not-allowed;
            }
            .form-control-static {
            padding-top: 7px;
            padding-bottom: 7px;
            margin-bottom: 0;
            min-height: 29px;
            }
            .form-control-static.input-lg,
            .form-control-static.input-sm {
            padding-left: 0;
            padding-right: 0;
            }
            .input-sm {
            height: 28px;
            padding: 5px 10px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            select.input-sm {
            height: 28px;
            line-height: 28px;
            }
            textarea.input-sm,
            select[multiple].input-sm {
            height: auto;
            }
            .form-group-sm .form-control {
            height: 28px;
            padding: 5px 10px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .form-group-sm select.form-control {
            height: 28px;
            line-height: 28px;
            }
            .form-group-sm textarea.form-control,
            .form-group-sm select[multiple].form-control {
            height: auto;
            }
            .form-group-sm .form-control-static {
            height: 28px;
            min-height: 28px;
            padding: 6px 10px;
            font-size: 11px;
            line-height: 1.5;
            }
            .input-lg {
            height: 42px;
            padding: 10px 16px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            select.input-lg {
            height: 42px;
            line-height: 42px;
            }
            textarea.input-lg,
            select[multiple].input-lg {
            height: auto;
            }
            .form-group-lg .form-control {
            height: 42px;
            padding: 10px 16px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .form-group-lg select.form-control {
            height: 42px;
            line-height: 42px;
            }
            .form-group-lg textarea.form-control,
            .form-group-lg select[multiple].form-control {
            height: auto;
            }
            .form-group-lg .form-control-static {
            height: 42px;
            min-height: 32px;
            padding: 11px 16px;
            font-size: 15px;
            line-height: 1.3333333;
            }
            .has-feedback {
            position: relative;
            }
            .has-feedback .form-control {
            padding-right: 38.75px;
            }
            .form-control-feedback {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            display: block;
            width: 31px;
            height: 31px;
            line-height: 31px;
            text-align: center;
            pointer-events: none;
            }
            .input-lg + .form-control-feedback,
            .input-group-lg + .form-control-feedback,
            .form-group-lg .form-control + .form-control-feedback {
            width: 42px;
            height: 42px;
            line-height: 42px;
            }
            .input-sm + .form-control-feedback,
            .input-group-sm + .form-control-feedback,
            .form-group-sm .form-control + .form-control-feedback {
            width: 28px;
            height: 28px;
            line-height: 28px;
            }
            .has-success .help-block,
            .has-success .control-label,
            .has-success .radio,
            .has-success .checkbox,
            .has-success .radio-inline,
            .has-success .checkbox-inline,
            .has-success.radio label,
            .has-success.checkbox label,
            .has-success.radio-inline label,
            .has-success.checkbox-inline label {
            color: #045702;
            }
            .has-success .form-control {
            border-color: #045702;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }
            .has-success .form-control:focus {
            border-color: #022501;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #09bb04;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #09bb04;
            }
            .has-success .input-group-addon {
            color: #045702;
            border-color: #045702;
            background-color: #bdedbc;
            }
            .has-success .form-control-feedback {
            color: #045702;
            }
            .has-warning .help-block,
            .has-warning .control-label,
            .has-warning .radio,
            .has-warning .checkbox,
            .has-warning .radio-inline,
            .has-warning .checkbox-inline,
            .has-warning.radio label,
            .has-warning.checkbox label,
            .has-warning.radio-inline label,
            .has-warning.checkbox-inline label {
            color: #574802;
            }
            .has-warning .form-control {
            border-color: #574802;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }
            .has-warning .form-control:focus {
            border-color: #251f01;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #bb9b04;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #bb9b04;
            }
            .has-warning .input-group-addon {
            color: #574802;
            border-color: #574802;
            background-color: #ffefa4;
            }
            .has-warning .form-control-feedback {
            color: #574802;
            }
            .has-error .help-block,
            .has-error .control-label,
            .has-error .radio,
            .has-error .checkbox,
            .has-error .radio-inline,
            .has-error .checkbox-inline,
            .has-error.radio label,
            .has-error.checkbox label,
            .has-error.radio-inline label,
            .has-error.checkbox-inline label {
            color: #ac1818;
            }
            .has-error .form-control {
            border-color: #ac1818;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }
            .has-error .form-control:focus {
            border-color: #7f1212;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #e54545;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #e54545;
            }
            .has-error .input-group-addon {
            color: #ac1818;
            border-color: #ac1818;
            background-color: #ffc9c9;
            }
            .has-error .form-control-feedback {
            color: #ac1818;
            }
            .has-feedback label ~ .form-control-feedback {
            top: 22px;
            }
            .has-feedback label.sr-only ~ .form-control-feedback {
            top: 0;
            }
            .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #d4d4d4;
            }
            @media (min-width: 768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle;
            }
            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle;
            }
            .form-inline .form-control-static {
                display: inline-block;
            }
            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle;
            }
            .form-inline .input-group .input-group-addon,
            .form-inline .input-group .input-group-btn,
            .form-inline .input-group .form-control {
                width: auto;
            }
            .form-inline .input-group > .form-control {
                width: 100%;
            }
            .form-inline .control-label {
                margin-bottom: 0;
                vertical-align: middle;
            }
            .form-inline .radio,
            .form-inline .checkbox {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle;
            }
            .form-inline .radio label,
            .form-inline .checkbox label {
                padding-left: 0;
            }
            .form-inline .radio input[type="radio"],
            .form-inline .checkbox input[type="checkbox"] {
                position: relative;
                margin-left: 0;
            }
            .form-inline .has-feedback .form-control-feedback {
                top: 0;
            }
            }
            .form-horizontal .radio,
            .form-horizontal .checkbox,
            .form-horizontal .radio-inline,
            .form-horizontal .checkbox-inline {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 7px;
            }
            .form-horizontal .radio,
            .form-horizontal .checkbox {
            min-height: 24px;
            }
            .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px;
            }
            @media (min-width: 768px) {
            .form-horizontal .control-label {
                text-align: right;
                margin-bottom: 0;
                padding-top: 7px;
            }
            }
            .form-horizontal .has-feedback .form-control-feedback {
            right: 15px;
            }
            @media (min-width: 768px) {
            .form-horizontal .form-group-lg .control-label {
                padding-top: 11px;
                font-size: 15px;
            }
            }
            @media (min-width: 768px) {
            .form-horizontal .form-group-sm .control-label {
                padding-top: 6px;
                font-size: 11px;
            }
            }
            .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 3px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }
            .btn:focus,
            .btn:active:focus,
            .btn.active:focus,
            .btn.focus,
            .btn:active.focus,
            .btn.active.focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
            }
            .btn:hover,
            .btn:focus,
            .btn.focus {
            color: #303641;
            text-decoration: none;
            }
            .btn:active,
            .btn.active {
            outline: 0;
            background-image: none;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            }
            .btn.disabled,
            .btn[disabled],
            fieldset[disabled] .btn {
            cursor: not-allowed;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            a.btn.disabled,
            fieldset[disabled] a.btn {
            pointer-events: none;
            }
            .btn-default {
            color: #303641;
            background-color: #f0f0f1;
            border-color: #f0f0f1;
            }
            .btn-default:focus,
            .btn-default.focus {
            color: #303641;
            background-color: #d6d6d8;
            border-color: #aeaeb3;
            }
            .btn-default:hover {
            color: #303641;
            background-color: #d6d6d8;
            border-color: #d0d0d3;
            }
            .btn-default:active,
            .btn-default.active,
            .open > .dropdown-toggle.btn-default {
            color: #303641;
            background-color: #d6d6d8;
            border-color: #d0d0d3;
            }
            .btn-default:active:hover,
            .btn-default.active:hover,
            .open > .dropdown-toggle.btn-default:hover,
            .btn-default:active:focus,
            .btn-default.active:focus,
            .open > .dropdown-toggle.btn-default:focus,
            .btn-default:active.focus,
            .btn-default.active.focus,
            .open > .dropdown-toggle.btn-default.focus {
            color: #303641;
            background-color: #c3c3c7;
            border-color: #aeaeb3;
            }
            .btn-default:active,
            .btn-default.active,
            .open > .dropdown-toggle.btn-default {
            background-image: none;
            }
            .btn-default.disabled:hover,
            .btn-default[disabled]:hover,
            fieldset[disabled] .btn-default:hover,
            .btn-default.disabled:focus,
            .btn-default[disabled]:focus,
            fieldset[disabled] .btn-default:focus,
            .btn-default.disabled.focus,
            .btn-default[disabled].focus,
            fieldset[disabled] .btn-default.focus {
            background-color: #f0f0f1;
            border-color: #f0f0f1;
            }
            .btn-default .badge {
            color: #f0f0f1;
            background-color: #303641;
            }
            .btn-primary {
            color: #fff;
            background-color: #303641;
            border-color: #252a32;
            }
            .btn-primary:focus,
            .btn-primary.focus {
            color: #fff;
            background-color: #1a1e24;
            border-color: #000000;
            }
            .btn-primary:hover {
            color: #fff;
            background-color: #1a1e24;
            border-color: #0b0d0f;
            }
            .btn-primary:active,
            .btn-primary.active,
            .open > .dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #1a1e24;
            border-color: #0b0d0f;
            }
            .btn-primary:active:hover,
            .btn-primary.active:hover,
            .open > .dropdown-toggle.btn-primary:hover,
            .btn-primary:active:focus,
            .btn-primary.active:focus,
            .open > .dropdown-toggle.btn-primary:focus,
            .btn-primary:active.focus,
            .btn-primary.active.focus,
            .open > .dropdown-toggle.btn-primary.focus {
            color: #fff;
            background-color: #0b0d0f;
            border-color: #000000;
            }
            .btn-primary:active,
            .btn-primary.active,
            .open > .dropdown-toggle.btn-primary {
            background-image: none;
            }
            .btn-primary.disabled:hover,
            .btn-primary[disabled]:hover,
            fieldset[disabled] .btn-primary:hover,
            .btn-primary.disabled:focus,
            .btn-primary[disabled]:focus,
            fieldset[disabled] .btn-primary:focus,
            .btn-primary.disabled.focus,
            .btn-primary[disabled].focus,
            fieldset[disabled] .btn-primary.focus {
            background-color: #303641;
            border-color: #252a32;
            }
            .btn-primary .badge {
            color: #303641;
            background-color: #fff;
            }
            .btn-success {
            color: #fff;
            background-color: #00a651;
            border-color: #008d45;
            }
            .btn-success:focus,
            .btn-success.focus {
            color: #fff;
            background-color: #007338;
            border-color: #000d06;
            }
            .btn-success:hover {
            color: #fff;
            background-color: #007338;
            border-color: #004f27;
            }
            .btn-success:active,
            .btn-success.active,
            .open > .dropdown-toggle.btn-success {
            color: #fff;
            background-color: #007338;
            border-color: #004f27;
            }
            .btn-success:active:hover,
            .btn-success.active:hover,
            .open > .dropdown-toggle.btn-success:hover,
            .btn-success:active:focus,
            .btn-success.active:focus,
            .open > .dropdown-toggle.btn-success:focus,
            .btn-success:active.focus,
            .btn-success.active.focus,
            .open > .dropdown-toggle.btn-success.focus {
            color: #fff;
            background-color: #004f27;
            border-color: #000d06;
            }
            .btn-success:active,
            .btn-success.active,
            .open > .dropdown-toggle.btn-success {
            background-image: none;
            }
            .btn-success.disabled:hover,
            .btn-success[disabled]:hover,
            fieldset[disabled] .btn-success:hover,
            .btn-success.disabled:focus,
            .btn-success[disabled]:focus,
            fieldset[disabled] .btn-success:focus,
            .btn-success.disabled.focus,
            .btn-success[disabled].focus,
            fieldset[disabled] .btn-success.focus {
            background-color: #00a651;
            border-color: #008d45;
            }
            .btn-success .badge {
            color: #00a651;
            background-color: #fff;
            }
            .btn-info {
            color: #fff;
            background-color: #21a9e1;
            border-color: #1c99cd;
            }
            .btn-info:focus,
            .btn-info.focus {
            color: #fff;
            background-color: #1988b6;
            border-color: #0c455d;
            }
            .btn-info:hover {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .btn-info:active,
            .btn-info.active,
            .open > .dropdown-toggle.btn-info {
            color: #fff;
            background-color: #1988b6;
            border-color: #147197;
            }
            .btn-info:active:hover,
            .btn-info.active:hover,
            .open > .dropdown-toggle.btn-info:hover,
            .btn-info:active:focus,
            .btn-info.active:focus,
            .open > .dropdown-toggle.btn-info:focus,
            .btn-info:active.focus,
            .btn-info.active.focus,
            .open > .dropdown-toggle.btn-info.focus {
            color: #fff;
            background-color: #147197;
            border-color: #0c455d;
            }
            .btn-info:active,
            .btn-info.active,
            .open > .dropdown-toggle.btn-info {
            background-image: none;
            }
            .btn-info.disabled:hover,
            .btn-info[disabled]:hover,
            fieldset[disabled] .btn-info:hover,
            .btn-info.disabled:focus,
            .btn-info[disabled]:focus,
            fieldset[disabled] .btn-info:focus,
            .btn-info.disabled.focus,
            .btn-info[disabled].focus,
            fieldset[disabled] .btn-info.focus {
            background-color: #21a9e1;
            border-color: #1c99cd;
            }
            .btn-info .badge {
            color: #21a9e1;
            background-color: #fff;
            }
            .btn-warning {
            color: #fff;
            background-color: #fad839;
            border-color: #f9d320;
            }
            .btn-warning:focus,
            .btn-warning.focus {
            color: #fff;
            background-color: #f9ce07;
            border-color: #967c04;
            }
            .btn-warning:hover {
            color: #fff;
            background-color: #f9ce07;
            border-color: #d7b205;
            }
            .btn-warning:active,
            .btn-warning.active,
            .open > .dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #f9ce07;
            border-color: #d7b205;
            }
            .btn-warning:active:hover,
            .btn-warning.active:hover,
            .open > .dropdown-toggle.btn-warning:hover,
            .btn-warning:active:focus,
            .btn-warning.active:focus,
            .open > .dropdown-toggle.btn-warning:focus,
            .btn-warning:active.focus,
            .btn-warning.active.focus,
            .open > .dropdown-toggle.btn-warning.focus {
            color: #fff;
            background-color: #d7b205;
            border-color: #967c04;
            }
            .btn-warning:active,
            .btn-warning.active,
            .open > .dropdown-toggle.btn-warning {
            background-image: none;
            }
            .btn-warning.disabled:hover,
            .btn-warning[disabled]:hover,
            fieldset[disabled] .btn-warning:hover,
            .btn-warning.disabled:focus,
            .btn-warning[disabled]:focus,
            fieldset[disabled] .btn-warning:focus,
            .btn-warning.disabled.focus,
            .btn-warning[disabled].focus,
            fieldset[disabled] .btn-warning.focus {
            background-color: #fad839;
            border-color: #f9d320;
            }
            .btn-warning .badge {
            color: #fad839;
            background-color: #fff;
            }
            .btn-danger {
            color: #fff;
            background-color: #cc2424;
            border-color: #b62020;
            }
            .btn-danger:focus,
            .btn-danger.focus {
            color: #fff;
            background-color: #a11c1c;
            border-color: #4a0d0d;
            }
            .btn-danger:hover {
            color: #fff;
            background-color: #a11c1c;
            border-color: #821717;
            }
            .btn-danger:active,
            .btn-danger.active,
            .open > .dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #a11c1c;
            border-color: #821717;
            }
            .btn-danger:active:hover,
            .btn-danger.active:hover,
            .open > .dropdown-toggle.btn-danger:hover,
            .btn-danger:active:focus,
            .btn-danger.active:focus,
            .open > .dropdown-toggle.btn-danger:focus,
            .btn-danger:active.focus,
            .btn-danger.active.focus,
            .open > .dropdown-toggle.btn-danger.focus {
            color: #fff;
            background-color: #821717;
            border-color: #4a0d0d;
            }
            .btn-danger:active,
            .btn-danger.active,
            .open > .dropdown-toggle.btn-danger {
            background-image: none;
            }
            .btn-danger.disabled:hover,
            .btn-danger[disabled]:hover,
            fieldset[disabled] .btn-danger:hover,
            .btn-danger.disabled:focus,
            .btn-danger[disabled]:focus,
            fieldset[disabled] .btn-danger:focus,
            .btn-danger.disabled.focus,
            .btn-danger[disabled].focus,
            fieldset[disabled] .btn-danger.focus {
            background-color: #cc2424;
            border-color: #b62020;
            }
            .btn-danger .badge {
            color: #cc2424;
            background-color: #fff;
            }
            .btn-link {
            color: #373e4a;
            font-weight: normal;
            border-radius: 0;
            }
            .btn-link,
            .btn-link:active,
            .btn-link.active,
            .btn-link[disabled],
            fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .btn-link,
            .btn-link:hover,
            .btn-link:focus,
            .btn-link:active {
            border-color: transparent;
            }
            .btn-link:hover,
            .btn-link:focus {
            color: #818da2;
            text-decoration: none;
            background-color: transparent;
            }
            .btn-link[disabled]:hover,
            fieldset[disabled] .btn-link:hover,
            .btn-link[disabled]:focus,
            fieldset[disabled] .btn-link:focus {
            color: #999999;
            text-decoration: none;
            }
            .btn-lg,
            .btn-group-lg > .btn {
            padding: 10px 16px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            .btn-sm,
            .btn-group-sm > .btn {
            padding: 5px 10px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-xs,
            .btn-group-xs > .btn {
            padding: 1px 5px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            .btn-block {
            display: block;
            width: 100%;
            }
            .btn-block + .btn-block {
            margin-top: 5px;
            }
            input[type="submit"].btn-block,
            input[type="reset"].btn-block,
            input[type="button"].btn-block {
            width: 100%;
            }
            .fade {
            opacity: 0;
            -webkit-transition: opacity 0.15s linear;
            -o-transition: opacity 0.15s linear;
            transition: opacity 0.15s linear;
            }
            .fade.in {
            opacity: 1;
            }
            .collapse {
            display: none;
            }
            .collapse.in {
            display: block;
            }
            tr.collapse.in {
            display: table-row;
            }
            tbody.collapse.in {
            display: table-row-group;
            }
            .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition-property: height, visibility;
            transition-property: height, visibility;
            -webkit-transition-duration: 0.35s;
            transition-duration: 0.35s;
            -webkit-transition-timing-function: ease;
            transition-timing-function: ease;
            }
            .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-top: 4px solid \9;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
            }
            .dropup,
            .dropdown {
            position: relative;
            }
            .dropdown-toggle:focus {
            outline: 0;
            }
            .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            list-style: none;
            font-size: 12px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 3px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            background-clip: padding-box;
            }
            .dropdown-menu.pull-right {
            right: 0;
            left: auto;
            }
            .dropdown-menu .divider {
            height: 1px;
            margin: 7.5px 0;
            overflow: hidden;
            background-color: #e5e5e5;
            }
            .dropdown-menu > li > a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.42857143;
            color: #7d8086;
            white-space: nowrap;
            }
            .dropdown-menu > li > a:hover,
            .dropdown-menu > li > a:focus {
            text-decoration: none;
            color: #717379;
            background-color: #f5f5f5;
            }
            .dropdown-menu > .active > a,
            .dropdown-menu > .active > a:hover,
            .dropdown-menu > .active > a:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            background-color: #949494;
            }
            .dropdown-menu > .disabled > a,
            .dropdown-menu > .disabled > a:hover,
            .dropdown-menu > .disabled > a:focus {
            color: #999999;
            }
            .dropdown-menu > .disabled > a:hover,
            .dropdown-menu > .disabled > a:focus {
            text-decoration: none;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
            cursor: not-allowed;
            }
            .open > .dropdown-menu {
            display: block;
            }
            .open > a {
            outline: 0;
            }
            .dropdown-menu-right {
            left: auto;
            right: 0;
            }
            .dropdown-menu-left {
            left: 0;
            right: auto;
            }
            .dropdown-header {
            display: block;
            padding: 3px 20px;
            font-size: 11px;
            line-height: 1.42857143;
            color: #999999;
            white-space: nowrap;
            }
            .dropdown-backdrop {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            z-index: 990;
            }
            .pull-right > .dropdown-menu {
            right: 0;
            left: auto;
            }
            .dropup .caret,
            .navbar-fixed-bottom .dropdown .caret {
            border-top: 0;
            border-bottom: 4px dashed;
            border-bottom: 4px solid \9;
            content: "";
            }
            .dropup .dropdown-menu,
            .navbar-fixed-bottom .dropdown .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-bottom: 2px;
            }
            @media (min-width: 768px) {
            .navbar-right .dropdown-menu {
                left: auto;
                right: 0;
            }
            .navbar-right .dropdown-menu-left {
                left: 0;
                right: auto;
            }
            }
            .btn-group,
            .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            }
            .btn-group > .btn,
            .btn-group-vertical > .btn {
            position: relative;
            float: left;
            }
            .btn-group > .btn:hover,
            .btn-group-vertical > .btn:hover,
            .btn-group > .btn:focus,
            .btn-group-vertical > .btn:focus,
            .btn-group > .btn:active,
            .btn-group-vertical > .btn:active,
            .btn-group > .btn.active,
            .btn-group-vertical > .btn.active {
            z-index: 2;
            }
            .btn-group .btn + .btn,
            .btn-group .btn + .btn-group,
            .btn-group .btn-group + .btn,
            .btn-group .btn-group + .btn-group {
            margin-left: -1px;
            }
            .btn-toolbar {
            margin-left: -5px;
            }
            .btn-toolbar .btn,
            .btn-toolbar .btn-group,
            .btn-toolbar .input-group {
            float: left;
            }
            .btn-toolbar > .btn,
            .btn-toolbar > .btn-group,
            .btn-toolbar > .input-group {
            margin-left: 5px;
            }
            .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0;
            }
            .btn-group > .btn:first-child {
            margin-left: 0;
            }
            .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            }
            .btn-group > .btn:last-child:not(:first-child),
            .btn-group > .dropdown-toggle:not(:first-child) {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            }
            .btn-group > .btn-group {
            float: left;
            }
            .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
            border-radius: 0;
            }
            .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
            .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            }
            .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            }
            .btn-group .dropdown-toggle:active,
            .btn-group.open .dropdown-toggle {
            outline: 0;
            }
            .btn-group > .btn + .dropdown-toggle {
            padding-left: 8px;
            padding-right: 8px;
            }
            .btn-group > .btn-lg + .dropdown-toggle {
            padding-left: 12px;
            padding-right: 12px;
            }
            .btn-group.open .dropdown-toggle {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            }
            .btn-group.open .dropdown-toggle.btn-link {
            -webkit-box-shadow: none;
            box-shadow: none;
            }
            .btn .caret {
            margin-left: 0;
            }
            .btn-lg .caret {
            border-width: 5px 5px 0;
            border-bottom-width: 0;
            }
            .dropup .btn-lg .caret {
            border-width: 0 5px 5px;
            }
            .btn-group-vertical > .btn,
            .btn-group-vertical > .btn-group,
            .btn-group-vertical > .btn-group > .btn {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%;
            }
            .btn-group-vertical > .btn-group > .btn {
            float: none;
            }
            .btn-group-vertical > .btn + .btn,
            .btn-group-vertical > .btn + .btn-group,
            .btn-group-vertical > .btn-group + .btn,
            .btn-group-vertical > .btn-group + .btn-group {
            margin-top: -1px;
            margin-left: 0;
            }
            .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
            border-radius: 0;
            }
            .btn-group-vertical > .btn:first-child:not(:last-child) {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }
            .btn-group-vertical > .btn:last-child:not(:first-child) {
            border-bottom-left-radius: 3px;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            }
            .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
            border-radius: 0;
            }
            .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
            .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }
            .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            }
            .btn-group-justified {
            display: table;
            width: 100%;
            table-layout: fixed;
            border-collapse: separate;
            }
            .btn-group-justified > .btn,
            .btn-group-justified > .btn-group {
            float: none;
            display: table-cell;
            width: 1%;
            }
            .btn-group-justified > .btn-group .btn {
            width: 100%;
            }
            .btn-group-justified > .btn-group .dropdown-menu {
            left: auto;
            }
            [data-toggle="buttons"] > .btn input[type="radio"],
            [data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
            [data-toggle="buttons"] > .btn input[type="checkbox"],
            [data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
            }
            .input-group {
            position: relative;
            display: table;
            border-collapse: separate;
            }
            .input-group[class*="col-"] {
            float: none;
            padding-left: 0;
            padding-right: 0;
            }
            .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0;
            }
            .input-group-lg > .form-control,
            .input-group-lg > .input-group-addon,
            .input-group-lg > .input-group-btn > .btn {
            height: 42px;
            padding: 10px 16px;
            font-size: 15px;
            line-height: 1.3333333;
            border-radius: 3px;
            }
            select.input-group-lg > .form-control,
            select.input-group-lg > .input-group-addon,
            select.input-group-lg > .input-group-btn > .btn {
            height: 42px;
            line-height: 42px;
            }
            textarea.input-group-lg > .form-control,
            textarea.input-group-lg > .input-group-addon,
            textarea.input-group-lg > .input-group-btn > .btn,
            select[multiple].input-group-lg > .form-control,
            select[multiple].input-group-lg > .input-group-addon,
            select[multiple].input-group-lg > .input-group-btn > .btn {
            height: auto;
            }
            .input-group-sm > .form-control,
            .input-group-sm > .input-group-addon,
            .input-group-sm > .input-group-btn > .btn {
            height: 28px;
            padding: 5px 10px;
            font-size: 11px;
            line-height: 1.5;
            border-radius: 2px;
            }
            select.input-group-sm > .form-control,
            select.input-group-sm > .input-group-addon,
            select.input-group-sm > .input-group-btn > .btn {
            height: 28px;
            line-height: 28px;
            }
            textarea.input-group-sm > .form-control,
            textarea.input-group-sm > .input-group-addon,
            textarea.input-group-sm > .input-group-btn > .btn,
            select[multiple].input-group-sm > .form-control,
            select[multiple].input-group-sm > .input-group-addon,
            select[multiple].input-group-sm > .input-group-btn > .btn {
            height: auto;
            }
            .input-group-addon,
            .input-group-btn,
            .input-group .form-control {
            display: table-cell;
            }
            .input-group-addon:not(:first-child):not(:last-child),
            .input-group-btn:not(:first-child):not(:last-child),
            .input-group .form-control:not(:first-child):not(:last-child) {
            border-radius: 0;
            }
            .input-group-addon,
            .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle;
            }
            .input-group-addon {
            padding: 6px 12px;
            font-size: 12px;
            font-weight: normal;
            line-height: 1;
            color: #555555;
            text-align: center;
            background-color: #eeeeee;
            border: 1px solid #ebebeb;
            border-radius: 3px;
            }
            .input-group-addon.input-sm {
            padding: 5px 10px;
            font-size: 11px;
            border-radius: 2px;
            }
            .input-group-addon.input-lg {
            padding: 10px 16px;
            font-size: 15px;
            border-radius: 3px;
            }
            .input-group-addon input[type="radio"],
            .input-group-addon input[type="checkbox"] {
            margin-top: 0;
            }
            .input-group .form-control:first-child,
            .input-group-addon:first-child,
            .input-group-btn:first-child > .btn,
            .input-group-btn:first-child > .btn-group > .btn,
            .input-group-btn:first-child > .dropdown-toggle,
            .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
            .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            }
            .input-group-addon:first-child {
            border-right: 0;
            }
            .input-group .form-control:last-child,
            .input-group-addon:last-child,
            .input-group-btn:last-child > .btn,
            .input-group-btn:last-child > .btn-group > .btn,
            .input-group-btn:last-child > .dropdown-toggle,
            .input-group-btn:first-child > .btn:not(:first-child),
            .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            }
            .input-group-addon:last-child {
            border-left: 0;
            }
            .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap;
            }
            .input-group-btn > .btn {
            position: relative;
            }
            .input-group-btn > .btn + .btn {
            margin-left: -1px;
            }
            .input-group-btn > .btn:hover,
            .input-group-btn > .btn:focus,
            .input-group-btn > .btn:active {
            z-index: 2;
            }
            .input-group-btn:first-child > .btn,
            .input-group-btn:first-child > .btn-group {
            margin-right: -1px;
            }
            .input-group-btn:last-child > .btn,
            .input-group-btn:last-child > .btn-group {
            z-index: 2;
            margin-left: -1px;
            }
            .nav {
            margin-bottom: 0;
            padding-left: 0;
            list-style: none;
            }
            .nav > li {
            position: relative;
            display: block;
            }
            .nav > li > a {
            position: relative;
            display: block;
            padding: 10px 15px;
            }
            .nav > li > a:hover,
            .nav > li > a:focus {
            text-decoration: none;
            background-color: #eeeeee;
            }
            .nav > li.disabled > a {
            color: #999999;
            }
            .nav > li.disabled > a:hover,
            .nav > li.disabled > a:focus {
            color: #999999;
            text-decoration: none;
            background-color: transparent;
            cursor: not-allowed;
            }
            .nav .open > a,
            .nav .open > a:hover,
            .nav .open > a:focus {
            background-color: #eeeeee;
            border-color: #373e4a;
            }
            .nav .nav-divider {
            height: 1px;
            margin: 7.5px 0;
            overflow: hidden;
            background-color: #e5e5e5;
            }
            .nav > li > a > img {
            max-width: none;
            }
            .nav-tabs {
            border-bottom: 1px solid #ddd;
            }
            .nav-tabs > li {
            float: left;
            margin-bottom: -1px;
            }
            .nav-tabs > li > a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 3px 3px 0 0;
            }
            .nav-tabs > li > a:hover {
            border-color: #eeeeee #eeeeee #ddd;
            }
            .nav-tabs > li.active > a,
            .nav-tabs > li.active > a:hover,
            .nav-tabs > li.active > a:focus {
            color: #555555;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom-color: transparent;
            cursor: default;
            }
            .nav-tabs.nav-justified {
            width: 100%;
            border-bottom: 0;
            }
            .nav-tabs.nav-justified > li {
            float: none;
            }
            .nav-tabs.nav-justified > li > a {
            text-align: center;
            margin-bottom: 5px;
            }
            .nav-tabs.nav-justified > .dropdown .dropdown-menu {
            top: auto;
            left: auto;
            }
            @media (min-width: 768px) {
            .nav-tabs.nav-justified > li {
                display: table-cell;
                width: 1%;
            }
            .nav-tabs.nav-justified > li > a {
                margin-bottom: 0;
            }
            }
            .nav-tabs.nav-justified > li > a {
            margin-right: 0;
            border-radius: 3px;
            }
            .nav-tabs.nav-justified > .active > a,
            .nav-tabs.nav-justified > .active > a:hover,
            .nav-tabs.nav-justified > .active > a:focus {
            border: 1px solid #ddd;
            }
            @media (min-width: 768px) {
            .nav-tabs.nav-justified > li > a {
                border-bottom: 1px solid #ddd;
                border-radius: 3px 3px 0 0;
            }
            .nav-tabs.nav-justified > .active > a,
            .nav-tabs.nav-justified > .active > a:hover,
            .nav-tabs.nav-justified > .active > a:focus {
                border-bottom-color: #fff;
            }
            }
            .nav-pills > li {
            float: left;
            }
            .nav-pills > li > a {
            border-radius: 3px;
            }
            .nav-pills > li + li {
            margin-left: 2px;
            }
            .nav-pills > li.active > a,
            .nav-pills > li.active > a:hover,
            .nav-pills > li.active > a:focus {
            color: #fff;
            background-color: #949494;
            }
            .nav-stacked > li {
            float: none;
            }
            .nav-stacked > li + li {
            margin-top: 2px;
            margin-left: 0;
            }
            .nav-justified {
            width: 100%;
            }
            .nav-justified > li {
            float: none;
            }
            .nav-justified > li > a {
            text-align: center;
            margin-bottom: 5px;
            }
            .nav-justified > .dropdown .dropdown-menu {
            top: auto;
            left: auto;
            }
            @media (min-width: 768px) {
            .nav-justified > li {
                display: table-cell;
                width: 1%;
            }
            .nav-justified > li > a {
                margin-bottom: 0;
            }
            }
            .nav-tabs-justified {
            border-bottom: 0;
            }
            .nav-tabs-justified > li > a {
            margin-right: 0;
            border-radius: 3px;
            }
            .nav-tabs-justified > .active > a,
            .nav-tabs-justified > .active > a:hover,
            .nav-tabs-justified > .active > a:focus {
            border: 1px solid #ddd;
            }
            @media (min-width: 768px) {
            .nav-tabs-justified > li > a {
                border-bottom: 1px solid #ddd;
                border-radius: 3px 3px 0 0;
            }
            .nav-tabs-justified > .active > a,
            .nav-tabs-justified > .active > a:hover,
            .nav-tabs-justified > .active > a:focus {
                border-bottom-color: #fff;
            }
            }
            .tab-content > .tab-pane {
            display: none;
            }
            .tab-content > .active {
            display: block;
            }
            .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            }
            .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 17px;
            border: 1px solid transparent;
            }
            @media (min-width: 768px) {
            .navbar {
                border-radius: 3px;
            }
            }
            @media (min-width: 768px) {
            .navbar-header {
                float: left;
            }
            }
            .navbar-collapse {
            overflow-x: visible;
            padding-right: 15px;
            padding-left: 15px;
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
            -webkit-overflow-scrolling: touch;
            }
            .navbar-collapse.in {
            overflow-y: auto;
            }
            @media (min-width: 768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                box-shadow: none;
            }
            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important;
            }
            .navbar-collapse.in {
                overflow-y: visible;
            }
            .navbar-fixed-top .navbar-collapse,
            .navbar-static-top .navbar-collapse,
            .navbar-fixed-bottom .navbar-collapse {
                padding-left: 0;
                padding-right: 0;
            }
            }
            .navbar-fixed-top .navbar-collapse,
            .navbar-fixed-bottom .navbar-collapse {
            max-height: 340px;
            }
            @media (max-device-width: 480px) and (orientation: landscape) {
            .navbar-fixed-top .navbar-collapse,
            .navbar-fixed-bottom .navbar-collapse {
                max-height: 200px;
            }
            }
            .container > .navbar-header,
            .container-fluid > .navbar-header,
            .container > .navbar-collapse,
            .container-fluid > .navbar-collapse {
            margin-right: -15px;
            margin-left: -15px;
            }
            @media (min-width: 768px) {
            .container > .navbar-header,
            .container-fluid > .navbar-header,
            .container > .navbar-collapse,
            .container-fluid > .navbar-collapse {
                margin-right: 0;
                margin-left: 0;
            }
            }
            .navbar-static-top {
            z-index: 1000;
            border-width: 0 0 1px;
            }
            @media (min-width: 768px) {
            .navbar-static-top {
                border-radius: 0;
            }
            }
            .navbar-fixed-top,
            .navbar-fixed-bottom {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030;
            }
            @media (min-width: 768px) {
            .navbar-fixed-top,
            .navbar-fixed-bottom {
                border-radius: 0;
            }
            }
            .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px;
            }
            .navbar-fixed-bottom {
            bottom: 0;
            margin-bottom: 0;
            border-width: 1px 0 0;
            }
            .navbar-brand {
            float: left;
            padding: 16.5px 15px;
            font-size: 15px;
            line-height: 17px;
            height: 50px;
            }
            .navbar-brand:hover,
            .navbar-brand:focus {
            text-decoration: none;
            }
            .navbar-brand > img {
            display: block;
            }
            @media (min-width: 768px) {
            .navbar > .container .navbar-brand,
            .navbar > .container-fluid .navbar-brand {
                margin-left: -15px;
            }
            }
            .navbar-toggle {
            position: relative;
            float: right;
            margin-right: 15px;
            padding: 9px 10px;
            margin-top: 8px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 3px;
            }
            .navbar-toggle:focus {
            outline: 0;
            }
            .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px;
            }
            .navbar-toggle .icon-bar + .icon-bar {
            margin-top: 4px;
            }
            @media (min-width: 768px) {
            .navbar-toggle {
                display: none;
            }
            }
            .navbar-nav {
            margin: 8.25px -15px;
            }
            .navbar-nav > li > a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 17px;
            }
            @media (max-width: 767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                box-shadow: none;
            }
            .navbar-nav .open .dropdown-menu > li > a,
            .navbar-nav .open .dropdown-menu .dropdown-header {
                padding: 5px 15px 5px 25px;
            }
            .navbar-nav .open .dropdown-menu > li > a {
                line-height: 17px;
            }
            .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-nav .open .dropdown-menu > li > a:focus {
                background-image: none;
            }
            }
            @media (min-width: 768px) {
            .navbar-nav {
                float: left;
                margin: 0;
            }
            .navbar-nav > li {
                float: left;
            }
            .navbar-nav > li > a {
                padding-top: 16.5px;
                padding-bottom: 16.5px;
            }
            }
            .navbar-form {
            margin-left: -15px;
            margin-right: -15px;
            padding: 10px 15px;
            border-top: 1px solid transparent;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
            margin-top: 9.5px;
            margin-bottom: 9.5px;
            }
            @media (min-width: 768px) {
            .navbar-form .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle;
            }
            .navbar-form .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle;
            }
            .navbar-form .form-control-static {
                display: inline-block;
            }
            .navbar-form .input-group {
                display: inline-table;
                vertical-align: middle;
            }
            .navbar-form .input-group .input-group-addon,
            .navbar-form .input-group .input-group-btn,
            .navbar-form .input-group .form-control {
                width: auto;
            }
            .navbar-form .input-group > .form-control {
                width: 100%;
            }
            .navbar-form .control-label {
                margin-bottom: 0;
                vertical-align: middle;
            }
            .navbar-form .radio,
            .navbar-form .checkbox {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle;
            }
            .navbar-form .radio label,
            .navbar-form .checkbox label {
                padding-left: 0;
            }
            .navbar-form .radio input[type="radio"],
            .navbar-form .checkbox input[type="checkbox"] {
                position: relative;
                margin-left: 0;
            }
            .navbar-form .has-feedback .form-control-feedback {
                top: 0;
            }
            }
            @media (max-width: 767px) {
            .navbar-form .form-group {
                margin-bottom: 5px;
            }
            .navbar-form .form-group:last-child {
                margin-bottom: 0;
            }
            }
            @media (min-width: 768px) {
            .navbar-form {
                width: auto;
                border: 0;
                margin-left: 0;
                margin-right: 0;
                padding-top: 0;
                padding-bottom: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            }
            .navbar-nav > li > .dropdown-menu {
            margin-top: 0;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            }
            .navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
            margin-bottom: 0;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }
            .navbar-btn {
            margin-top: 9.5px;
            margin-bottom: 9.5px;
            }
            .navbar-btn.btn-sm {
            margin-top: 11px;
            margin-bottom: 11px;
            }
            .navbar-btn.btn-xs {
            margin-top: 14px;
            margin-bottom: 14px;
            }
            .navbar-text {
            margin-top: 16.5px;
            margin-bottom: 16.5px;
            }
            @media (min-width: 768px) {
            .navbar-text {
                float: left;
                margin-left: 15px;
                margin-right: 15px;
            }
            }
            @media (min-width: 768px) {
            .navbar-left {
                float: left !important;
            }
            .navbar-right {
                float: right !important;
                margin-right: -15px;
            }
            .navbar-right ~ .navbar-right {
                margin-right: 0;
            }
            }
            .navbar-default {
            background-color: #fff;
            border-color: #ebebeb;
            }
            .navbar-default .navbar-brand {
            color: #777;
            }
            .navbar-default .navbar-brand:hover,
            .navbar-default .navbar-brand:focus {
            color: #5e5e5e;
            background-color: transparent;
            }
            .navbar-default .navbar-text {
            color: #373e4a;
            }
            .navbar-default .navbar-nav > li > a {
            color: #777;
            }
            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
            color: #333;
            background-color: transparent;
            }
            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
            color: #555;
            background-color: #eeeeee;
            }
            .navbar-default .navbar-nav > .disabled > a,
            .navbar-default .navbar-nav > .disabled > a:hover,
            .navbar-default .navbar-nav > .disabled > a:focus {
            color: #ccc;
            background-color: transparent;
            }
            .navbar-default .navbar-toggle {
            border-color: #ddd;
            }
            .navbar-default .navbar-toggle:hover,
            .navbar-default .navbar-toggle:focus {
            background-color: #ddd;
            }
            .navbar-default .navbar-toggle .icon-bar {
            background-color: #888;
            }
            .navbar-default .navbar-collapse,
            .navbar-default .navbar-form {
            border-color: #ebebeb;
            }
            .navbar-default .navbar-nav > .open > a,
            .navbar-default .navbar-nav > .open > a:hover,
            .navbar-default .navbar-nav > .open > a:focus {
            background-color: #eeeeee;
            color: #555;
            }
            @media (max-width: 767px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #777;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #333;
                background-color: transparent;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #555;
                background-color: #eeeeee;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
            .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
                color: #ccc;
                background-color: transparent;
            }
            }
            .navbar-default .navbar-link {
            color: #777;
            }
            .navbar-default .navbar-link:hover {
            color: #333;
            }
            .navbar-default .btn-link {
            color: #777;
            }
            .navbar-default .btn-link:hover,
            .navbar-default .btn-link:focus {
            color: #333;
            }
            .navbar-default .btn-link[disabled]:hover,
            fieldset[disabled] .navbar-default .btn-link:hover,
            .navbar-default .btn-link[disabled]:focus,
            fieldset[disabled] .navbar-default .btn-link:focus {
            color: #ccc;
            }
            .navbar-inverse {
            background-color: #373e4a;
            border-color: #454a54;
            }
            .navbar-inverse .navbar-brand {
            color: #bfbfbf;
            }
            .navbar-inverse .navbar-brand:hover,
            .navbar-inverse .navbar-brand:focus {
            color: #fff;
            background-color: transparent;
            }
            .navbar-inverse .navbar-text {
            color: #aaabae;
            }
            .navbar-inverse .navbar-nav > li > a {
            color: #bfbfbf;
            }
            .navbar-inverse .navbar-nav > li > a:hover,
            .navbar-inverse .navbar-nav > li > a:focus {
            color: #fff;
            background-color: transparent;
            }
            .navbar-inverse .navbar-nav > .active > a,
            .navbar-inverse .navbar-nav > .active > a:hover,
            .navbar-inverse .navbar-nav > .active > a:focus {
            color: #fff;
            background-color: #21252d;
            }
            .navbar-inverse .navbar-nav > .disabled > a,
            .navbar-inverse .navbar-nav > .disabled > a:hover,
            .navbar-inverse .navbar-nav > .disabled > a:focus {
            color: #444;
            background-color: transparent;
            }
            .navbar-inverse .navbar-toggle {
            border-color: #333;
            }
            .navbar-inverse .navbar-toggle:hover,
            .navbar-inverse .navbar-toggle:focus {
            background-color: #333;
            }
            .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff;
            }
            .navbar-inverse .navbar-collapse,
            .navbar-inverse .navbar-form {
            border-color: #282d36;
            }
            .navbar-inverse .navbar-nav > .open > a,
            .navbar-inverse .navbar-nav > .open > a:hover,
            .navbar-inverse .navbar-nav > .open > a:focus {
            background-color: #21252d;
            color: #fff;
            }
            @media (max-width: 767px) {
            .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
                border-color: #454a54;
            }
            .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
                background-color: #454a54;
            }
            .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
                color: #bfbfbf;
            }
            .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #fff;
                background-color: transparent;
            }
            .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
            .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #fff;
                background-color: #21252d;
            }
            .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
            .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
                color: #444;
                background-color: transparent;
            }
            }
            .navbar-inverse .navbar-link {
            color: #bfbfbf;
            }
            .navbar-inverse .navbar-link:hover {
            color: #fff;
            }
            .navbar-inverse .btn-link {
            color: #bfbfbf;
            }
            .navbar-inverse .btn-link:hover,
            .navbar-inverse .btn-link:focus {
            color: #fff;
            }
            .navbar-inverse .btn-link[disabled]:hover,
            fieldset[disabled] .navbar-inverse .btn-link:hover,
            .navbar-inverse .btn-link[disabled]:focus,
            fieldset[disabled] .navbar-inverse .btn-link:focus {
            color: #444;
            }
            .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 17px;
            list-style: none;
            background-color: #f5f5f5;
            border-radius: 3px;
            }
            .breadcrumb > li {
            display: inline-block;
            }
            .breadcrumb > li + li:before {
            content: "/\00a0";
            padding: 0 5px;
            color: #ccc;
            }
            .breadcrumb > .active {
            color: #999999;
            }
            .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 17px 0;
            border-radius: 3px;
            }
            .pagination > li {
            display: inline;
            }
            .pagination > li > a,
            .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            line-height: 1.42857143;
            text-decoration: none;
            color: #373e4a;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-left: -1px;
            }
            .pagination > li:first-child > a,
            .pagination > li:first-child > span {
            margin-left: 0;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
            }
            .pagination > li:last-child > a,
            .pagination > li:last-child > span {
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
            }
            .pagination > li > a:hover,
            .pagination > li > span:hover,
            .pagination > li > a:focus,
            .pagination > li > span:focus {
            z-index: 2;
            color: #818da2;
            background-color: #eeeeee;
            border-color: #ddd;
            }
            .pagination > .active > a,
            .pagination > .active > span,
            .pagination > .active > a:hover,
            .pagination > .active > span:hover,
            .pagination > .active > a:focus,
            .pagination > .active > span:focus {
            z-index: 3;
            color: #fff;
            background-color: #373e4a;
            border-color: #949494;
            cursor: default;
            }
            .pagination > .disabled > span,
            .pagination > .disabled > span:hover,
            .pagination > .disabled > span:focus,
            .pagination > .disabled > a,
            .pagination > .disabled > a:hover,
            .pagination > .disabled > a:focus {
            color: #999999;
            background-color: #fff;
            border-color: #ddd;
            cursor: not-allowed;
            }
            .pagination-lg > li > a,
            .pagination-lg > li > span {
            padding: 10px 16px;
            font-size: 15px;
            line-height: 1.3333333;
            }
            .pagination-lg > li:first-child > a,
            .pagination-lg > li:first-child > span {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
            }
            .pagination-lg > li:last-child > a,
            .pagination-lg > li:last-child > span {
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
            }
            .pagination-sm > li > a,
            .pagination-sm > li > span {
            padding: 5px 10px;
            font-size: 11px;
            line-height: 1.5;
            }
            .pagination-sm > li:first-child > a,
            .pagination-sm > li:first-child > span {
            border-bottom-left-radius: 2px;
            border-top-left-radius: 2px;
            }
            .pagination-sm > li:last-child > a,
            .pagination-sm > li:last-child > span {
            border-bottom-right-radius: 2px;
            border-top-right-radius: 2px;
            }
            .pager {
            padding-left: 0;
            margin: 17px 0;
            list-style: none;
            text-align: center;
            }
            .pager li {
            display: inline;
            }
            .pager li > a,
            .pager li > span {
            display: inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
            }
            .pager li > a:hover,
            .pager li > a:focus {
            text-decoration: none;
            background-color: #eeeeee;
            }
            .pager .next > a,
            .pager .next > span {
            float: right;
            }
            .pager .previous > a,
            .pager .previous > span {
            float: left;
            }
            .pager .disabled > a,
            .pager .disabled > a:hover,
            .pager .disabled > a:focus,
            .pager .disabled > span {
            color: #999999;
            background-color: #fff;
            cursor: not-allowed;
            }
            .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: bold;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em;
            }
            a.label:hover,
            a.label:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            }
            .label:empty {
            display: none;
            }
            .btn .label {
            position: relative;
            top: -1px;
            }
            .label-default {
            background-color: #999999;
            }
            .label-default[href]:hover,
            .label-default[href]:focus {
            background-color: #808080;
            }
            .label-primary {
            background-color: #373e4a;
            }
            .label-primary[href]:hover,
            .label-primary[href]:focus {
            background-color: #21252d;
            }
            .label-success {
            background-color: #00a651;
            }
            .label-success[href]:hover,
            .label-success[href]:focus {
            background-color: #007338;
            }
            .label-info {
            background-color: #21a9e1;
            }
            .label-info[href]:hover,
            .label-info[href]:focus {
            background-color: #1988b6;
            }
            .label-warning {
            background-color: #fad839;
            }
            .label-warning[href]:hover,
            .label-warning[href]:focus {
            background-color: #f9ce07;
            }
            .label-danger {
            background-color: #cc2424;
            }
            .label-danger[href]:hover,
            .label-danger[href]:focus {
            background-color: #a11c1c;
            }
            .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 11px;
            font-weight: normal;
            color: #fff;
            line-height: 1;
            vertical-align: middle;
            white-space: nowrap;
            text-align: center;
            background-color: #999999;
            border-radius: 10px;
            }
            .badge:empty {
            display: none;
            }
            .btn .badge {
            position: relative;
            top: -1px;
            }
            .btn-xs .badge,
            .btn-group-xs > .btn .badge {
            top: 0;
            padding: 1px 5px;
            }
            a.badge:hover,
            a.badge:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            }
            .list-group-item.active > .badge,
            .nav-pills > .active > a > .badge {
            color: #373e4a;
            background-color: #fff;
            }
            .list-group-item > .badge {
            float: right;
            }
            .list-group-item > .badge + .badge {
            margin-right: 5px;
            }
            .nav-pills > li > a > .badge {
            margin-left: 3px;
            }
            .jumbotron {
            padding-top: 40px;
            padding-bottom: 40px;
            margin-bottom: 40px;
            color: #373e4a;
            background-color: #eeeeee;
            }
            .jumbotron h1,
            .jumbotron .h1 {
            color: inherit;
            }
            .jumbotron p {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 200;
            }
            .jumbotron > hr {
            border-top-color: #d5d5d5;
            }
            .container .jumbotron,
            .container-fluid .jumbotron {
            border-radius: 3px;
            padding-left: 15px;
            padding-right: 15px;
            }
            .jumbotron .container {
            max-width: 100%;
            }
            @media screen and (min-width: 768px) {
            .jumbotron {
                padding-top: 64px;
                padding-bottom: 64px;
            }
            .container .jumbotron,
            .container-fluid .jumbotron {
                padding-left: 80px;
                padding-right: 80px;
            }
            .jumbotron h1,
            .jumbotron .h1 {
                font-size: 54px;
            }
            }
            .thumbnail {
            display: block;
            padding: 4px;
            margin-bottom: 17px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ededf0;
            border-radius: 3px;
            -webkit-transition: border 0.2s ease-in-out;
            -o-transition: border 0.2s ease-in-out;
            transition: border 0.2s ease-in-out;
            }
            .thumbnail > img,
            .thumbnail a > img {
            margin-left: auto;
            margin-right: auto;
            }
            a.thumbnail:hover,
            a.thumbnail:focus,
            a.thumbnail.active {
            border-color: #373e4a;
            }
            .thumbnail .caption {
            padding: 9px;
            color: #949494;
            }
            .alert {
            padding: 15px;
            margin-bottom: 17px;
            border: 1px solid transparent;
            border-radius: 3px;
            }
            .alert h4 {
            margin-top: 0;
            color: inherit;
            }
            .alert .alert-link {
            font-weight: bold;
            }
            .alert > p,
            .alert > ul {
            margin-bottom: 0;
            }
            .alert > p + p {
            margin-top: 5px;
            }
            .alert-dismissable,
            .alert-dismissible {
            padding-right: 35px;
            }
            .alert-dismissable .close,
            .alert-dismissible .close {
            position: relative;
            top: -2px;
            right: -21px;
            color: inherit;
            }
            .alert-success {
            background-color: #bdedbc;
            border-color: #b4e8a8;
            color: #045702;
            }
            .alert-success hr {
            border-top-color: #a2e294;
            }
            .alert-success .alert-link {
            color: #022501;
            }
            .alert-info {
            background-color: #c5e8f7;
            border-color: #a6e8f3;
            color: #2c7ea1;
            }
            .alert-info hr {
            border-top-color: #8fe3f0;
            }
            .alert-info .alert-link {
            color: #215f79;
            }
            .alert-warning {
            background-color: #ffefa4;
            border-color: #ffd78a;
            color: #574802;
            }
            .alert-warning hr {
            border-top-color: #ffce71;
            }
            .alert-warning .alert-link {
            color: #251f01;
            }
            .alert-danger {
            background-color: #ffc9c9;
            border-color: #ffafbd;
            color: #ac1818;
            }
            .alert-danger hr {
            border-top-color: #ff96a7;
            }
            .alert-danger .alert-link {
            color: #7f1212;
            }
            @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }
            to {
                background-position: 0 0;
            }
            }
            @keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }
            to {
                background-position: 0 0;
            }
            }
            .progress {
            overflow: hidden;
            height: 17px;
            margin-bottom: 17px;
            background-color: #f5f5f5;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            }
            .progress-bar {
            float: left;
            width: 0%;
            height: 100%;
            font-size: 11px;
            line-height: 17px;
            color: #fff;
            text-align: center;
            background-color: #949494;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            -webkit-transition: width 0.6s ease;
            -o-transition: width 0.6s ease;
            transition: width 0.6s ease;
            }
            .progress-striped .progress-bar,
            .progress-bar-striped {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 40px 40px;
            }
            .progress.active .progress-bar,
            .progress-bar.active {
            -webkit-animation: progress-bar-stripes 2s linear infinite;
            -o-animation: progress-bar-stripes 2s linear infinite;
            animation: progress-bar-stripes 2s linear infinite;
            }
            .progress-bar-success {
            background-color: #00a651;
            }
            .progress-striped .progress-bar-success {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            }
            .progress-bar-info {
            background-color: #21a9e1;
            }
            .progress-striped .progress-bar-info {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            }
            .progress-bar-warning {
            background-color: #fad839;
            }
            .progress-striped .progress-bar-warning {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            }
            .progress-bar-danger {
            background-color: #cc2424;
            }
            .progress-striped .progress-bar-danger {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            }
            .media {
            margin-top: 15px;
            }
            .media:first-child {
            margin-top: 0;
            }
            .media,
            .media-body {
            zoom: 1;
            overflow: hidden;
            }
            .media-body {
            width: 10000px;
            }
            .media-object {
            display: block;
            }
            .media-object.img-thumbnail {
            max-width: none;
            }
            .media-right,
            .media > .pull-right {
            padding-left: 10px;
            }
            .media-left,
            .media > .pull-left {
            padding-right: 10px;
            }
            .media-left,
            .media-right,
            .media-body {
            display: table-cell;
            vertical-align: top;
            }
            .media-middle {
            vertical-align: middle;
            }
            .media-bottom {
            vertical-align: bottom;
            }
            .media-heading {
            margin-top: 0;
            margin-bottom: 5px;
            }
            .media-list {
            padding-left: 0;
            list-style: none;
            }
            .list-group {
            margin-bottom: 20px;
            padding-left: 0;
            }
            .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid #ddd;
            }
            .list-group-item:first-child {
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            }
            .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            }
            a.list-group-item,
            button.list-group-item {
            color: #555;
            }
            a.list-group-item .list-group-item-heading,
            button.list-group-item .list-group-item-heading {
            color: #333;
            }
            a.list-group-item:hover,
            button.list-group-item:hover,
            a.list-group-item:focus,
            button.list-group-item:focus {
            text-decoration: none;
            color: #555;
            background-color: #f5f5f5;
            }
            button.list-group-item {
            width: 100%;
            text-align: left;
            }
            .list-group-item.disabled,
            .list-group-item.disabled:hover,
            .list-group-item.disabled:focus {
            background-color: #eeeeee;
            color: #999999;
            cursor: not-allowed;
            }
            .list-group-item.disabled .list-group-item-heading,
            .list-group-item.disabled:hover .list-group-item-heading,
            .list-group-item.disabled:focus .list-group-item-heading {
            color: inherit;
            }
            .list-group-item.disabled .list-group-item-text,
            .list-group-item.disabled:hover .list-group-item-text,
            .list-group-item.disabled:focus .list-group-item-text {
            color: #999999;
            }
            .list-group-item.active,
            .list-group-item.active:hover,
            .list-group-item.active:focus {
            z-index: 2;
            color: #fff;
            background-color: #373e4a;
            border-color: #373e4a;
            }
            .list-group-item.active .list-group-item-heading,
            .list-group-item.active:hover .list-group-item-heading,
            .list-group-item.active:focus .list-group-item-heading,
            .list-group-item.active .list-group-item-heading > small,
            .list-group-item.active:hover .list-group-item-heading > small,
            .list-group-item.active:focus .list-group-item-heading > small,
            .list-group-item.active .list-group-item-heading > .small,
            .list-group-item.active:hover .list-group-item-heading > .small,
            .list-group-item.active:focus .list-group-item-heading > .small {
            color: inherit;
            }
            .list-group-item.active .list-group-item-text,
            .list-group-item.active:hover .list-group-item-text,
            .list-group-item.active:focus .list-group-item-text {
            color: #99a3b4;
            }
            .list-group-item-success {
            color: #045702;
            background-color: #bdedbc;
            }
            a.list-group-item-success,
            button.list-group-item-success {
            color: #045702;
            }
            a.list-group-item-success .list-group-item-heading,
            button.list-group-item-success .list-group-item-heading {
            color: inherit;
            }
            a.list-group-item-success:hover,
            button.list-group-item-success:hover,
            a.list-group-item-success:focus,
            button.list-group-item-success:focus {
            color: #045702;
            background-color: #a9e8a8;
            }
            a.list-group-item-success.active,
            button.list-group-item-success.active,
            a.list-group-item-success.active:hover,
            button.list-group-item-success.active:hover,
            a.list-group-item-success.active:focus,
            button.list-group-item-success.active:focus {
            color: #fff;
            background-color: #045702;
            border-color: #045702;
            }
            .list-group-item-info {
            color: #2c7ea1;
            background-color: #c5e8f7;
            }
            a.list-group-item-info,
            button.list-group-item-info {
            color: #2c7ea1;
            }
            a.list-group-item-info .list-group-item-heading,
            button.list-group-item-info .list-group-item-heading {
            color: inherit;
            }
            a.list-group-item-info:hover,
            button.list-group-item-info:hover,
            a.list-group-item-info:focus,
            button.list-group-item-info:focus {
            color: #2c7ea1;
            background-color: #afdff4;
            }
            a.list-group-item-info.active,
            button.list-group-item-info.active,
            a.list-group-item-info.active:hover,
            button.list-group-item-info.active:hover,
            a.list-group-item-info.active:focus,
            button.list-group-item-info.active:focus {
            color: #fff;
            background-color: #2c7ea1;
            border-color: #2c7ea1;
            }
            .list-group-item-warning {
            color: #574802;
            background-color: #ffefa4;
            }
            a.list-group-item-warning,
            button.list-group-item-warning {
            color: #574802;
            }
            a.list-group-item-warning .list-group-item-heading,
            button.list-group-item-warning .list-group-item-heading {
            color: inherit;
            }
            a.list-group-item-warning:hover,
            button.list-group-item-warning:hover,
            a.list-group-item-warning:focus,
            button.list-group-item-warning:focus {
            color: #574802;
            background-color: #ffeb8a;
            }
            a.list-group-item-warning.active,
            button.list-group-item-warning.active,
            a.list-group-item-warning.active:hover,
            button.list-group-item-warning.active:hover,
            a.list-group-item-warning.active:focus,
            button.list-group-item-warning.active:focus {
            color: #fff;
            background-color: #574802;
            border-color: #574802;
            }
            .list-group-item-danger {
            color: #ac1818;
            background-color: #ffc9c9;
            }
            a.list-group-item-danger,
            button.list-group-item-danger {
            color: #ac1818;
            }
            a.list-group-item-danger .list-group-item-heading,
            button.list-group-item-danger .list-group-item-heading {
            color: inherit;
            }
            a.list-group-item-danger:hover,
            button.list-group-item-danger:hover,
            a.list-group-item-danger:focus,
            button.list-group-item-danger:focus {
            color: #ac1818;
            background-color: #ffafaf;
            }
            a.list-group-item-danger.active,
            button.list-group-item-danger.active,
            a.list-group-item-danger.active:hover,
            button.list-group-item-danger.active:hover,
            a.list-group-item-danger.active:focus,
            button.list-group-item-danger.active:focus {
            color: #fff;
            background-color: #ac1818;
            border-color: #ac1818;
            }
            .list-group-item-heading {
            margin-top: 0;
            margin-bottom: 5px;
            }
            .list-group-item-text {
            margin-bottom: 0;
            line-height: 1.3;
            }
            .panel {
            margin-bottom: 17px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            }
            .panel-body {
            padding: 15px;
            }
            .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 2px;
            border-top-left-radius: 2px;
            }
            .panel-heading > .dropdown .dropdown-toggle {
            color: inherit;
            }
            .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 14px;
            color: inherit;
            }
            .panel-title > a,
            .panel-title > small,
            .panel-title > .small,
            .panel-title > small > a,
            .panel-title > .small > a {
            color: inherit;
            }
            .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
            }
            .panel > .list-group,
            .panel > .panel-collapse > .list-group {
            margin-bottom: 0;
            }
            .panel > .list-group .list-group-item,
            .panel > .panel-collapse > .list-group .list-group-item {
            border-width: 1px 0;
            border-radius: 0;
            }
            .panel > .list-group:first-child .list-group-item:first-child,
            .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
            border-top: 0;
            border-top-right-radius: 2px;
            border-top-left-radius: 2px;
            }
            .panel > .list-group:last-child .list-group-item:last-child,
            .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
            border-bottom: 0;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
            }
            .panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            }
            .panel-heading + .list-group .list-group-item:first-child {
            border-top-width: 0;
            }
            .list-group + .panel-footer {
            border-top-width: 0;
            }
            .panel > .table,
            .panel > .table-responsive > .table,
            .panel > .panel-collapse > .table {
            margin-bottom: 0;
            }
            .panel > .table caption,
            .panel > .table-responsive > .table caption,
            .panel > .panel-collapse > .table caption {
            padding-left: 15px;
            padding-right: 15px;
            }
            .panel > .table:first-child,
            .panel > .table-responsive:first-child > .table:first-child {
            border-top-right-radius: 2px;
            border-top-left-radius: 2px;
            }
            .panel > .table:first-child > thead:first-child > tr:first-child,
            .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
            .panel > .table:first-child > tbody:first-child > tr:first-child,
            .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            }
            .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
            .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
            .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
            .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
            .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
            .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
            .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
            .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
            border-top-left-radius: 2px;
            }
            .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
            .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
            .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
            .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
            .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
            .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
            .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
            .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
            border-top-right-radius: 2px;
            }
            .panel > .table:last-child,
            .panel > .table-responsive:last-child > .table:last-child {
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
            }
            .panel > .table:last-child > tbody:last-child > tr:last-child,
            .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
            .panel > .table:last-child > tfoot:last-child > tr:last-child,
            .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
            }
            .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
            .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
            .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
            .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
            .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
            .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
            .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
            .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
            border-bottom-left-radius: 2px;
            }
            .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
            .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
            .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
            .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
            .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
            .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
            .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
            .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
            border-bottom-right-radius: 2px;
            }
            .panel > .panel-body + .table,
            .panel > .panel-body + .table-responsive,
            .panel > .table + .panel-body,
            .panel > .table-responsive + .panel-body {
            border-top: 1px solid #ebebeb;
            }
            .panel > .table > tbody:first-child > tr:first-child th,
            .panel > .table > tbody:first-child > tr:first-child td {
            border-top: 0;
            }
            .panel > .table-bordered,
            .panel > .table-responsive > .table-bordered {
            border: 0;
            }
            .panel > .table-bordered > thead > tr > th:first-child,
            .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
            .panel > .table-bordered > tbody > tr > th:first-child,
            .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
            .panel > .table-bordered > tfoot > tr > th:first-child,
            .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
            .panel > .table-bordered > thead > tr > td:first-child,
            .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
            .panel > .table-bordered > tbody > tr > td:first-child,
            .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
            .panel > .table-bordered > tfoot > tr > td:first-child,
            .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
            border-left: 0;
            }
            .panel > .table-bordered > thead > tr > th:last-child,
            .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
            .panel > .table-bordered > tbody > tr > th:last-child,
            .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
            .panel > .table-bordered > tfoot > tr > th:last-child,
            .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
            .panel > .table-bordered > thead > tr > td:last-child,
            .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
            .panel > .table-bordered > tbody > tr > td:last-child,
            .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
            .panel > .table-bordered > tfoot > tr > td:last-child,
            .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
            border-right: 0;
            }
            .panel > .table-bordered > thead > tr:first-child > td,
            .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
            .panel > .table-bordered > tbody > tr:first-child > td,
            .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
            .panel > .table-bordered > thead > tr:first-child > th,
            .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
            .panel > .table-bordered > tbody > tr:first-child > th,
            .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
            border-bottom: 0;
            }
            .panel > .table-bordered > tbody > tr:last-child > td,
            .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
            .panel > .table-bordered > tfoot > tr:last-child > td,
            .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
            .panel > .table-bordered > tbody > tr:last-child > th,
            .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
            .panel > .table-bordered > tfoot > tr:last-child > th,
            .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
            border-bottom: 0;
            }
            .panel > .table-responsive {
            border: 0;
            margin-bottom: 0;
            }
            .panel-group {
            margin-bottom: 17px;
            }
            .panel-group .panel {
            margin-bottom: 0;
            border-radius: 3px;
            }
            .panel-group .panel + .panel {
            margin-top: 5px;
            }
            .panel-group .panel-heading {
            border-bottom: 0;
            }
            .panel-group .panel-heading + .panel-collapse > .panel-body,
            .panel-group .panel-heading + .panel-collapse > .list-group {
            border-top: 1px solid #ddd;
            }
            .panel-group .panel-footer {
            border-top: 0;
            }
            .panel-group .panel-footer + .panel-collapse .panel-body {
            border-bottom: 1px solid #ddd;
            }
            .panel-default {
            border-color: #949494;
            }
            .panel-default > .panel-heading {
            color: #373e4a;
            background-color: #949494;
            border-color: #949494;
            }
            .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #949494;
            }
            .panel-default > .panel-heading .badge {
            color: #949494;
            background-color: #373e4a;
            }
            .panel-default > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #949494;
            }
            .panel-primary {
            border-color: #949494;
            }
            .panel-primary > .panel-heading {
            color: #fff;
            background-color: #949494;
            border-color: #949494;
            }
            .panel-primary > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #949494;
            }
            .panel-primary > .panel-heading .badge {
            color: #949494;
            background-color: #fff;
            }
            .panel-primary > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #949494;
            }
            .panel-success {
            border-color: #b4e8a8;
            }
            .panel-success > .panel-heading {
            color: #045702;
            background-color: #bdedbc;
            border-color: #b4e8a8;
            }
            .panel-success > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #b4e8a8;
            }
            .panel-success > .panel-heading .badge {
            color: #bdedbc;
            background-color: #045702;
            }
            .panel-success > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #b4e8a8;
            }
            .panel-info {
            border-color: #a6e8f3;
            }
            .panel-info > .panel-heading {
            color: #2c7ea1;
            background-color: #c5e8f7;
            border-color: #a6e8f3;
            }
            .panel-info > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #a6e8f3;
            }
            .panel-info > .panel-heading .badge {
            color: #c5e8f7;
            background-color: #2c7ea1;
            }
            .panel-info > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #a6e8f3;
            }
            .panel-warning {
            border-color: #ffd78a;
            }
            .panel-warning > .panel-heading {
            color: #574802;
            background-color: #ffefa4;
            border-color: #ffd78a;
            }
            .panel-warning > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #ffd78a;
            }
            .panel-warning > .panel-heading .badge {
            color: #ffefa4;
            background-color: #574802;
            }
            .panel-warning > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #ffd78a;
            }
            .panel-danger {
            border-color: #ffafbd;
            }
            .panel-danger > .panel-heading {
            color: #ac1818;
            background-color: #ffc9c9;
            border-color: #ffafbd;
            }
            .panel-danger > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #ffafbd;
            }
            .panel-danger > .panel-heading .badge {
            color: #ffc9c9;
            background-color: #ac1818;
            }
            .panel-danger > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #ffafbd;
            }
            .embed-responsive {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            overflow: hidden;
            }
            .embed-responsive .embed-responsive-item,
            .embed-responsive iframe,
            .embed-responsive embed,
            .embed-responsive object,
            .embed-responsive video {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            border: 0;
            }
            .embed-responsive-16by9 {
            padding-bottom: 56.25%;
            }
            .embed-responsive-4by3 {
            padding-bottom: 75%;
            }
            .well {
            min-height: 20px;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            }
            .well blockquote {
            border-color: #ddd;
            border-color: rgba(0, 0, 0, 0.15);
            }
            .well-lg {
            padding: 24px;
            border-radius: 3px;
            }
            .well-sm {
            padding: 9px;
            border-radius: 2px;
            }
            .close {
            float: right;
            font-size: 18px;
            font-weight: bold;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: 0.2;
            filter: alpha(opacity=20);
            }
            .close:hover,
            .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: 0.5;
            filter: alpha(opacity=50);
            }
            button.close {
            padding: 0;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none;
            }
            .modal-open {
            overflow: hidden;
            }
            .modal {
            display: none;
            overflow: hidden;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            -webkit-overflow-scrolling: touch;
            outline: 0;
            }
            .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            -o-transform: translate(0, -25%);
            transform: translate(0, -25%);
            -webkit-transition: -webkit-transform 0.3s ease-out;
            -moz-transition: -moz-transform 0.3s ease-out;
            -o-transition: -o-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            }
            .modal.in .modal-dialog {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            }
            .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
            }
            .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px;
            }
            .modal-content {
            position: relative;
            background-color: #fff;
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            background-clip: padding-box;
            outline: 0;
            }
            .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
            }
            .modal-backdrop.fade {
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .modal-backdrop.in {
            opacity: 0.5;
            filter: alpha(opacity=50);
            }
            .modal-header {
            padding: 15px;
            border-bottom: 1px solid #e5e5e5;
            }
            .modal-header .close {
            margin-top: -2px;
            }
            .modal-title {
            margin: 0;
            line-height: 1.42857143;
            }
            .modal-body {
            position: relative;
            padding: 15px;
            }
            .modal-footer {
            padding: 15px;
            text-align: right;
            border-top: 1px solid #e5e5e5;
            }
            .modal-footer .btn + .btn {
            margin-left: 5px;
            margin-bottom: 0;
            }
            .modal-footer .btn-group .btn + .btn {
            margin-left: -1px;
            }
            .modal-footer .btn-block + .btn-block {
            margin-left: 0;
            }
            .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
            }
            @media (min-width: 768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto;
            }
            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            }
            .modal-sm {
                width: 300px;
            }
            }
            @media (min-width: 992px) {
            .modal-lg {
                width: 900px;
            }
            }
            .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.42857143;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            font-size: 11px;
            opacity: 0;
            filter: alpha(opacity=0);
            }
            .tooltip.in {
            opacity: 0.9;
            filter: alpha(opacity=90);
            }
            .tooltip.top {
            margin-top: -3px;
            padding: 5px 0;
            }
            .tooltip.right {
            margin-left: 3px;
            padding: 0 5px;
            }
            .tooltip.bottom {
            margin-top: 3px;
            padding: 5px 0;
            }
            .tooltip.left {
            margin-left: -3px;
            padding: 0 5px;
            }
            .tooltip-inner {
            max-width: 200px;
            padding: 3px 8px;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 3px;
            }
            .tooltip-arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            }
            .tooltip.top .tooltip-arrow {
            bottom: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000;
            }
            .tooltip.top-left .tooltip-arrow {
            bottom: 0;
            right: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000;
            }
            .tooltip.top-right .tooltip-arrow {
            bottom: 0;
            left: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000;
            }
            .tooltip.right .tooltip-arrow {
            top: 50%;
            left: 0;
            margin-top: -5px;
            border-width: 5px 5px 5px 0;
            border-right-color: #000;
            }
            .tooltip.left .tooltip-arrow {
            top: 50%;
            right: 0;
            margin-top: -5px;
            border-width: 5px 0 5px 5px;
            border-left-color: #000;
            }
            .tooltip.bottom .tooltip-arrow {
            top: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000;
            }
            .tooltip.bottom-left .tooltip-arrow {
            top: 0;
            right: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000;
            }
            .tooltip.bottom-right .tooltip-arrow {
            top: 0;
            left: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000;
            }
            .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: none;
            max-width: 276px;
            padding: 1px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.42857143;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            font-size: 12px;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }
            .popover.top {
            margin-top: -10px;
            }
            .popover.right {
            margin-left: 10px;
            }
            .popover.bottom {
            margin-top: 10px;
            }
            .popover.left {
            margin-left: -10px;
            }
            .popover-title {
            margin: 0;
            padding: 8px 14px;
            font-size: 12px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-radius: 2px 2px 0 0;
            }
            .popover-content {
            padding: 9px 14px;
            }
            .popover > .arrow,
            .popover > .arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            }
            .popover > .arrow {
            border-width: 11px;
            }
            .popover > .arrow:after {
            border-width: 10px;
            content: "";
            }
            .popover.top > .arrow {
            left: 50%;
            margin-left: -11px;
            border-bottom-width: 0;
            border-top-color: #999999;
            border-top-color: rgba(0, 0, 0, 0.25);
            bottom: -11px;
            }
            .popover.top > .arrow:after {
            content: " ";
            bottom: 1px;
            margin-left: -10px;
            border-bottom-width: 0;
            border-top-color: #fff;
            }
            .popover.right > .arrow {
            top: 50%;
            left: -11px;
            margin-top: -11px;
            border-left-width: 0;
            border-right-color: #999999;
            border-right-color: rgba(0, 0, 0, 0.25);
            }
            .popover.right > .arrow:after {
            content: " ";
            left: 1px;
            bottom: -10px;
            border-left-width: 0;
            border-right-color: #fff;
            }
            .popover.bottom > .arrow {
            left: 50%;
            margin-left: -11px;
            border-top-width: 0;
            border-bottom-color: #999999;
            border-bottom-color: rgba(0, 0, 0, 0.25);
            top: -11px;
            }
            .popover.bottom > .arrow:after {
            content: " ";
            top: 1px;
            margin-left: -10px;
            border-top-width: 0;
            border-bottom-color: #fff;
            }
            .popover.left > .arrow {
            top: 50%;
            right: -11px;
            margin-top: -11px;
            border-right-width: 0;
            border-left-color: #999999;
            border-left-color: rgba(0, 0, 0, 0.25);
            }
            .popover.left > .arrow:after {
            content: " ";
            right: 1px;
            border-right-width: 0;
            border-left-color: #fff;
            bottom: -10px;
            }
            .carousel {
            position: relative;
            }
            .carousel-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
            }
            .carousel-inner > .item {
            display: none;
            position: relative;
            -webkit-transition: 0.6s ease-in-out left;
            -o-transition: 0.6s ease-in-out left;
            transition: 0.6s ease-in-out left;
            }
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
            line-height: 1;
            }
            @media all and (transform-3d), (-webkit-transform-3d) {
            .carousel-inner > .item {
                -webkit-transition: -webkit-transform 0.6s ease-in-out;
                -moz-transition: -moz-transform 0.6s ease-in-out;
                -o-transition: -o-transform 0.6s ease-in-out;
                transition: transform 0.6s ease-in-out;
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-perspective: 1000px;
                -moz-perspective: 1000px;
                perspective: 1000px;
            }
            .carousel-inner > .item.next,
            .carousel-inner > .item.active.right {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                left: 0;
            }
            .carousel-inner > .item.prev,
            .carousel-inner > .item.active.left {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                left: 0;
            }
            .carousel-inner > .item.next.left,
            .carousel-inner > .item.prev.right,
            .carousel-inner > .item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
            }
            .carousel-inner > .active,
            .carousel-inner > .next,
            .carousel-inner > .prev {
            display: block;
            }
            .carousel-inner > .active {
            left: 0;
            }
            .carousel-inner > .next,
            .carousel-inner > .prev {
            position: absolute;
            top: 0;
            width: 100%;
            }
            .carousel-inner > .next {
            left: 100%;
            }
            .carousel-inner > .prev {
            left: -100%;
            }
            .carousel-inner > .next.left,
            .carousel-inner > .prev.right {
            left: 0;
            }
            .carousel-inner > .active.left {
            left: -100%;
            }
            .carousel-inner > .active.right {
            left: 100%;
            }
            .carousel-control {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 15%;
            opacity: 0.5;
            filter: alpha(opacity=50);
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
            }
            .carousel-control.left {
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
            }
            .carousel-control.right {
            left: auto;
            right: 0;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
            }
            .carousel-control:hover,
            .carousel-control:focus {
            outline: 0;
            color: #fff;
            text-decoration: none;
            opacity: 0.9;
            filter: alpha(opacity=90);
            }
            .carousel-control .icon-prev,
            .carousel-control .icon-next,
            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right {
            position: absolute;
            top: 50%;
            margin-top: -10px;
            z-index: 5;
            display: inline-block;
            }
            .carousel-control .icon-prev,
            .carousel-control .glyphicon-chevron-left {
            left: 50%;
            margin-left: -10px;
            }
            .carousel-control .icon-next,
            .carousel-control .glyphicon-chevron-right {
            right: 50%;
            margin-right: -10px;
            }
            .carousel-control .icon-prev,
            .carousel-control .icon-next {
            width: 20px;
            height: 20px;
            line-height: 1;
            font-family: serif;
            }
            .carousel-control .icon-prev:before {
            content: '\2039';
            }
            .carousel-control .icon-next:before {
            content: '\203a';
            }
            .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 15;
            width: 60%;
            margin-left: -30%;
            padding-left: 0;
            list-style: none;
            text-align: center;
            }
            .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 1px;
            text-indent: -999px;
            border: 1px solid #fff;
            border-radius: 10px;
            cursor: pointer;
            background-color: #000 \9;
            background-color: rgba(0, 0, 0, 0);
            }
            .carousel-indicators .active {
            margin: 0;
            width: 12px;
            height: 12px;
            background-color: #fff;
            }
            .carousel-caption {
            position: absolute;
            left: 15%;
            right: 15%;
            bottom: 20px;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
            }
            .carousel-caption .btn {
            text-shadow: none;
            }
            @media screen and (min-width: 768px) {
            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-prev,
            .carousel-control .icon-next {
                width: 30px;
                height: 30px;
                margin-top: -15px;
                font-size: 30px;
            }
            .carousel-control .glyphicon-chevron-left,
            .carousel-control .icon-prev {
                margin-left: -15px;
            }
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next {
                margin-right: -15px;
            }
            .carousel-caption {
                left: 20%;
                right: 20%;
                padding-bottom: 30px;
            }
            .carousel-indicators {
                bottom: 20px;
            }
            }
            .clearfix:before,
            .clearfix:after,
            .dl-horizontal dd:before,
            .dl-horizontal dd:after,
            .container:before,
            .container:after,
            .container-fluid:before,
            .container-fluid:after,
            .row:before,
            .row:after,
            .form-horizontal .form-group:before,
            .form-horizontal .form-group:after,
            .btn-toolbar:before,
            .btn-toolbar:after,
            .btn-group-vertical > .btn-group:before,
            .btn-group-vertical > .btn-group:after,
            .nav:before,
            .nav:after,
            .navbar:before,
            .navbar:after,
            .navbar-header:before,
            .navbar-header:after,
            .navbar-collapse:before,
            .navbar-collapse:after,
            .pager:before,
            .pager:after,
            .panel-body:before,
            .panel-body:after,
            .modal-header:before,
            .modal-header:after,
            .modal-footer:before,
            .modal-footer:after {
            content: " ";
            display: table;
            }
            .clearfix:after,
            .dl-horizontal dd:after,
            .container:after,
            .container-fluid:after,
            .row:after,
            .form-horizontal .form-group:after,
            .btn-toolbar:after,
            .btn-group-vertical > .btn-group:after,
            .nav:after,
            .navbar:after,
            .navbar-header:after,
            .navbar-collapse:after,
            .pager:after,
            .panel-body:after,
            .modal-header:after,
            .modal-footer:after {
            clear: both;
            }
            .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
            .pull-right {
            float: right !important;
            }
            .pull-left {
            float: left !important;
            }
            .hide {
            display: none !important;
            }
            .show {
            display: block !important;
            }
            .invisible {
            visibility: hidden;
            }
            .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
            }
            .hidden {
            display: none !important;
            }
            .affix {
            position: fixed;
            }
            @-ms-viewport {
            width: device-width;
            }
            .visible-xs,
            .visible-sm,
            .visible-md,
            .visible-lg {
            display: none !important;
            }
            .visible-xs-block,
            .visible-xs-inline,
            .visible-xs-inline-block,
            .visible-sm-block,
            .visible-sm-inline,
            .visible-sm-inline-block,
            .visible-md-block,
            .visible-md-inline,
            .visible-md-inline-block,
            .visible-lg-block,
            .visible-lg-inline,
            .visible-lg-inline-block {
            display: none !important;
            }
            @media (max-width: 767px) {
            .visible-xs {
                display: block !important;
            }
            table.visible-xs {
                display: table !important;
            }
            tr.visible-xs {
                display: table-row !important;
            }
            th.visible-xs,
            td.visible-xs {
                display: table-cell !important;
            }
            }
            @media (max-width: 767px) {
            .visible-xs-block {
                display: block !important;
            }
            }
            @media (max-width: 767px) {
            .visible-xs-inline {
                display: inline !important;
            }
            }
            @media (max-width: 767px) {
            .visible-xs-inline-block {
                display: inline-block !important;
            }
            }
            @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm {
                display: block !important;
            }
            table.visible-sm {
                display: table !important;
            }
            tr.visible-sm {
                display: table-row !important;
            }
            th.visible-sm,
            td.visible-sm {
                display: table-cell !important;
            }
            }
            @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-block {
                display: block !important;
            }
            }
            @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline {
                display: inline !important;
            }
            }
            @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline-block {
                display: inline-block !important;
            }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md {
                display: block !important;
            }
            table.visible-md {
                display: table !important;
            }
            tr.visible-md {
                display: table-row !important;
            }
            th.visible-md,
            td.visible-md {
                display: table-cell !important;
            }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-block {
                display: block !important;
            }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline {
                display: inline !important;
            }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline-block {
                display: inline-block !important;
            }
            }
            @media (min-width: 1200px) {
            .visible-lg {
                display: block !important;
            }
            table.visible-lg {
                display: table !important;
            }
            tr.visible-lg {
                display: table-row !important;
            }
            th.visible-lg,
            td.visible-lg {
                display: table-cell !important;
            }
            }
            @media (min-width: 1200px) {
            .visible-lg-block {
                display: block !important;
            }
            }
            @media (min-width: 1200px) {
            .visible-lg-inline {
                display: inline !important;
            }
            }
            @media (min-width: 1200px) {
            .visible-lg-inline-block {
                display: inline-block !important;
            }
            }
            @media (max-width: 767px) {
            .hidden-xs {
                display: none !important;
            }
            }
            @media (min-width: 768px) and (max-width: 991px) {
            .hidden-sm {
                display: none !important;
            }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
            .hidden-md {
                display: none !important;
            }
            }
            @media (min-width: 1200px) {
            .hidden-lg {
                display: none !important;
            }
            }
            .visible-print {
            display: none !important;
            }
            @media print {
            .visible-print {
                display: block !important;
            }
            table.visible-print {
                display: table !important;
            }
            tr.visible-print {
                display: table-row !important;
            }
            th.visible-print,
            td.visible-print {
                display: table-cell !important;
            }
            }
            .visible-print-block {
            display: none !important;
            }
            @media print {
            .visible-print-block {
                display: block !important;
            }
            }
            .visible-print-inline {
            display: none !important;
            }
            @media print {
            .visible-print-inline {
                display: inline !important;
            }
            }
            .visible-print-inline-block {
            display: none !important;
            }
            @media print {
            .visible-print-inline-block {
                display: inline-block !important;
            }
            }
            @media print {
            .hidden-print {
                display: none !important;
            }
            }
            /* Custom css */

            .primary{
                background: #303641;
                padding: 3px 5px;
                border-radius: 3px;
                color: #fff;
            }
            .success{
                background: green;
                padding: 3px 5px;
                border-radius: 3px;
                color: #fff;
            }
            .danger{
                background: brown;
                padding: 3px 5px;
                border-radius: 3px;
                color: #fff;
            }

            .warning{
                background: goldenrod;
                padding: 3px 5px;
                border-radius: 3px;
                color: #fff;
            }
            .grey{
                background-color: #f5f5f6;
                color: #a6a7aa !important;
                padding-left: 5px;
                padding-right: 15px;
                padding-top: 5px;
                padding-bottom: 5px;
                text-align: left !important;
                font-size: 13px !important;
            }

            .light{
                background-color: #f9f9f9;
                color: #a6a7aa !important;
                padding-left: 5px;
                padding-right: 15px;
                padding-top: 5px;
                padding-bottom: 5px;
                text-align: left !important;
                font-size: 13px !important;
            }
            .invoice-left{
                font-size: 13px !important;
            }

        </style>
    </head>
    <body>
        <div class="invoice" style="max-width: 850px;margin:auto;margin-top: 30px;">
            <div class="row">
                <div class="col-sm-6 invoice-left">
                    <a href="#">
                        <img src="{{asset('public/admin/images/logo-light@2x.png')}}" width="185" alt="" />
                    </a>
                </div>
                <div class="col-sm-6 invoice-right">
                        <h3>INVOICE NO. {{"#NEON".str_pad($order[0]->id, 5, '0', STR_PAD_LEFT)}}</h3>
                        <span>{{$order[0]->created_at}}</span>
                </div>
            </div>
            <hr class="margin" />
            <div class="row">
                <div class="col-sm-6 invoice-left">
                    <div class="invoice-left">
                        Neon LTD
                        <br/>
                        TJAC building, Southern view estate.
                        <br />
                        Lekki, Lagos, Nigeria.
                        <br />
                        +234 811 9487 489
                        <br />
                        Yinka Adeniran
                        <br />
                        info@neon.com
                    </div>
                    <br />
                </div>
                <div class="col-md-6 invoice-right">
                    <h4>Customer details:</h4>
                    <table style="width: 100%;">
                        <tr>
                            <td class="grey">
                                Customer Name:
                            </td>
                            <td class="light">
                                {{$order[0]->customer_name}}
                            </td>
                        </tr>
                        <tr>
                            <td class="grey">
                                Customer Phone:
                            </td>
                            <td class="light">
                                {{$order[0]->customer_phone}}
                            </td>
                        </tr>
                        <tr>
                            <td class="grey">
                                Contact Name:
                            </td>
                            <td class="light">
                                {{$order[0]->contact_person}}
                            </td>
                        </tr>
                        <tr>
                            <td class="grey">
                                Contact Phone:
                            </td>
                            <td class="light">
                                {{$order[0]->phone}}
                            </td>
                        </tr>
                        <tr>
                            <td class="grey">
                                Address:
                            </td>
                            <td class="light">
                                {{$order[0]->address}}
                            </td>
                        </tr>
                    </table>
                    <br />
                </div>
            </div>
            <div class="margin"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th width="60%">Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                        $total = 0;
                    ?>
                    @foreach($order as $key=>$ord)
                    <?php $total += $ord->selling_price* $ord->qty; ?>
                    <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td>{{$ord->name}}</td>
                        <td>{{$ord->qty}}</td>
                        <td class="text-right">₦{{number_format($ord->selling_price* $ord->qty)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="margin"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="invoice-left">
                        TJAC building, Southern view estate.
                        <br />
                        Lekki, Lagos, Nigeria.
                        <br />
                        +234 811 9487 489
                        <br />
                        Yinka Adeniran
                        <br />
                        info@neon.com
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="invoice-right">
                        <ul class="list-unstyled">
                            <li>
                                Sub - Total amount: 
                                <strong>₦{{number_format($total)}}</strong>
                            </li>
                            <li>
                                Delivery: 
                                <strong>₦1,500</strong>
                            </li>
                            <li>
                                Discount: 
                                -----
                            </li>
                            <li>
                                Grand Total:
                                <strong>₦{{number_format($total + 1500)}}</strong>
                            </li>
                        </ul>
                        <br />
                        <a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
                            Print Invoice
                            <i class="entypo-doc-text"></i>
                        </a>
                        &nbsp;
                        {{--
                        <a href="mailbox-compose.html" class="btn btn-success btn-icon icon-left hidden-print">
                            Send Invoice
                            <i class="entypo-mail"></i>
                        </a>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>