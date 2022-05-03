
<?php header("Content-type:text/css"); ?>
.cleditorMain {border:1px solid #999; padding:0 1px 1px; background-color:white}
.cleditorMain,
.cleditorPopup,
.cleditorMain * {-moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box}
.cleditorMain iframe {border:none; margin:0; padding:0}
.cleditorMain textarea {overflow-y:scroll; font:10pt Arial,Verdana; resize:none; outline:none}
.cleditorToolbar {background:url('<?php echo"http://localhost:8080"?>/img/notes/toolbar.gif'); repeat}
.cleditorGroup {float:left; height:26px}
.cleditorButton {float:left; width:24px; height:24px; margin:1px 0 1px 0; background: url('<?php echo"http://localhost:8080"?>/img/notes/buttons.gif')}
.cleditorDisabled {opacity:0.3; filter:alpha(opacity=30)}
.cleditorDivider {float:left; width:1px; height:23px; margin:1px 0 1px 0; background:#CCC}
.cleditorPopup {border:solid 1px #999; background-color:white; color:#333333; position:absolute; font:10pt Arial,Verdana; cursor:default; z-index:10000}
.cleditorList div {padding:2px 4px 2px 4px}
.cleditorList p,
.cleditorList h1,
.cleditorList h2,
.cleditorList h3,
.cleditorList h4,
.cleditorList h5,
.cleditorList h6,
.cleditorList font {padding:0; margin:0; background-color:Transparent}
.cleditorColor {width:150px; padding:1px 0 0 1px}
.cleditorColor div {float:left; width:14px; height:14px; margin:0 1px 1px 0}
.cleditorPrompt {background-color:#F6F7F9; padding:8px; font-size:8.5pt}
.cleditorPrompt label {padding-bottom:8px}
.cleditorMsg {background-color:#FDFCEE; width:150px; padding:4px; font-size:8.5pt}


body 
{
    background: linear-gradient(-45deg,#7a52b3, #2e1c2b, #4a1942, #7a52b3);
    background-size: cover;
    font-family: 'amatic sc', cursive;
   
}

.title_editar_bloco{
    font-size: 30px;
    color: #fff;
    text-align: center;
    margin-top: 3%;
    margin-bottom: 3%;

}
#editor_area{
    font-size: 30px;
    text-align: center;
    margin-top: 3%;
    margin-bottom: 3%;
}