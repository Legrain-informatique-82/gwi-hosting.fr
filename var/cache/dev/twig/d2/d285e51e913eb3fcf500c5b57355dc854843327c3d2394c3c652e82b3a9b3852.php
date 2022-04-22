<?php

/* :Contact/Fancybox:return.html.twig */
class __TwigTemplate_0e9793fcd8ed4922d70ae7344fa1cf186766946cea0ab5a7b6e34115d525f87c extends Twig_Template
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
        $__internal_2cf267a4813a4c415bd7b87b709347f2761e072c02926a8fde654592c236f776 = $this->env->getExtension("native_profiler");
        $__internal_2cf267a4813a4c415bd7b87b709347f2761e072c02926a8fde654592c236f776->enter($__internal_2cf267a4813a4c415bd7b87b709347f2761e072c02926a8fde654592c236f776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/Fancybox:return.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf267a4813a4c415bd7b87b709347f2761e072c02926a8fde654592c236f776->leave($__internal_2cf267a4813a4c415bd7b87b709347f2761e072c02926a8fde654592c236f776_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd8f0e2b3b427ae088e298a4313888bc25d35b72d0c5c3193439664ed6b1fcc2 = $this->env->getExtension("native_profiler");
        $__internal_bd8f0e2b3b427ae088e298a4313888bc25d35b72d0c5c3193439664ed6b1fcc2->enter($__internal_bd8f0e2b3b427ae088e298a4313888bc25d35b72d0c5c3193439664ed6b1fcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"javascript:parent.jQuery.fancybox.close();\">Close iframe parent</a>
    <div id=\"vars\" data-idline=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["idLine"]) ? $context["idLine"] : $this->getContext($context, "idLine")), "html", null, true);
        echo "\" data-code=\"";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
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
        
        $__internal_bd8f0e2b3b427ae088e298a4313888bc25d35b72d0c5c3193439664ed6b1fcc2->leave($__internal_bd8f0e2b3b427ae088e298a4313888bc25d35b72d0c5c3193439664ed6b1fcc2_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
