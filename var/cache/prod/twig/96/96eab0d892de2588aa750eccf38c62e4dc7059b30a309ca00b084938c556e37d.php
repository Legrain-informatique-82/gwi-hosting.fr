<?php

/* :Contact/Fancybox:return.html.twig */
class __TwigTemplate_e8350ff4f495c9e6992559e61af9d024917bf35ef3b773c42da5b5d44fb26566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Contact/Fancybox/base.html.twig", ":Contact/Fancybox:return.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Contact/Fancybox/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"javascript:parent.jQuery.fancybox.close();\">Close iframe parent</a>
    <div id=\"vars\" data-idline=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["idLine"]) ? $context["idLine"] : null), "html", null, true);
        echo "\" data-code=\"";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">

    </div>
    <script type=\"text/javascript\">
        /*
        var pathArray = window.location.pathname.split( '/' );
        var total = pathArray.length;
        var idLine = pathArray[total-3];
        var idContact = pathArray[total-2];
        var valueContact = pathArray[total-1];
        valueContact = valueContact.replace(\"%20\", \" \");
        */


        \$(function () {
            var idLine = \$('#vars').data('idline');
            var idContact = \$('#vars').data('code');
            var valueContact =\$('#vars').data('value');
            // Passer les élements de l'url vers toutes les listes et, supprimer le selected et ajouter le bon sur la liste que l'on a touché.
            \$(window.self.top.document).find('.ajaxSelect').append('<option value=\"'+idContact+'\">'+valueContact+'</option>');

            \$(window.self.top.document).find(\"select[data-id='\"+idLine+\"'] option:selected\").removeAttr('selected');
            \$(window.self.top.document).find(\"select[data-id='\"+idLine+\"'] option[value='\"+idContact+\"']\").attr('selected','selected');

            // On ferme l'iframe
            parent.jQuery.fancybox.close();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return ":Contact/Fancybox:return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'Contact/Fancybox/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>*/
/*     <div id="vars" data-idline="{{ idLine }}" data-code="{{ code }}" data-value="{{ value }}">*/
/* */
/*     </div>*/
/*     <script type="text/javascript">*/
/*         /**/
/*         var pathArray = window.location.pathname.split( '/' );*/
/*         var total = pathArray.length;*/
/*         var idLine = pathArray[total-3];*/
/*         var idContact = pathArray[total-2];*/
/*         var valueContact = pathArray[total-1];*/
/*         valueContact = valueContact.replace("%20", " ");*/
/*         *//* */
/* */
/* */
/*         $(function () {*/
/*             var idLine = $('#vars').data('idline');*/
/*             var idContact = $('#vars').data('code');*/
/*             var valueContact =$('#vars').data('value');*/
/*             // Passer les élements de l'url vers toutes les listes et, supprimer le selected et ajouter le bon sur la liste que l'on a touché.*/
/*             $(window.self.top.document).find('.ajaxSelect').append('<option value="'+idContact+'">'+valueContact+'</option>');*/
/* */
/*             $(window.self.top.document).find("select[data-id='"+idLine+"'] option:selected").removeAttr('selected');*/
/*             $(window.self.top.document).find("select[data-id='"+idLine+"'] option[value='"+idContact+"']").attr('selected','selected');*/
/* */
/*             // On ferme l'iframe*/
/*             parent.jQuery.fancybox.close();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
