1\_	CSS es una hoja de estilo, que es una tecnológica que nos permite modificar la apariencia de la pagina, ayudando a organizar los elementos, darles colores, animaciones. En otras palabras es hacer que el HTML sea mucho mas vistoso y que genere atracción al usuario.



2\_	Las reglas que presenta CSS son: como su nombre lo indica va en cascada, lo que quiere decir que tiene una precedencia de arriba hacia abajo, luego que al querer darle un estilo a algún elemento necesitamos seleccionarlo(mediante algún selector) y luego a ese elemento seleccionado debemos declararle entre llaves ({}) los atributos que va a tener, ya sea el tamaño, el color, etc.



3\_	Al documento se le pueden dar estilos de 3 maneras: en el elemento, ej <h1 color="green">...</h1>, nivel de pagina, que seria declarar los atributos de los elementos en el <head> utilizando la etiqueta <style></style> o mediante un archivo externo que tenga la extensión .css



4\_



&nbsp;	1. **Selector de tipo (etiqueta)**:Selecciona todos los elementos de un tipo. Ejemplo:

&nbsp;	   p {

&nbsp;	   color: blue;

&nbsp;	   }

&nbsp;	2. **Selector de clase:** Selecciona todos los elementos con una clase específica. Ejemplo:

&nbsp;	   .fondoAmarillo {

&nbsp;	   background-color: yellow;

&nbsp;	   }



&nbsp;	3. **Selector de ID:** Selecciona un elemento único con un id específico. Ejemplo:

&nbsp;	  #tituloPrincipal {

&nbsp;	  font-size: 24px;

&nbsp;	  }



&nbsp;	4.**Selector universal:** Selecciona todos los elementos de la página. Ejemplo:

&nbsp;	 {

&nbsp;	  margin: 0;

&nbsp;	  padding: 0;

&nbsp;	  }



&nbsp;	5. **Selector descendente:** Selecciona elementos dentro de otro elemento. Ejemplo:

&nbsp;	  div p {

&nbsp;	   color: red;

&nbsp;  	}

&nbsp;	6. **Selector de grupo:** Aplica estilos a varios selectores a la vez. Ejemplo:

&nbsp;	   h1, h2, h3 {

&nbsp;	   font-family: Arial;

&nbsp;	   }



5\_ Una **pseudoclase** es una palabra clave que se añade al selector para poder definir un estilo a un elemento en un estado especial, ej. el mouse por encima, un link visitado, etc. Los mas utilizados son: **link**(estilo cuando no esta visitado el enlace)**,visited**(estilo cuando  esta visitado el enlace)**,hover**(estilo cuando el mouse esta por encima del enlace)**,active**(estilo cuando se esta clickeando el enlace).



6\_ La herencia es una característica que comparten los elementos los cuales son hijos de otros elemento. Es decir, si yo tengo un **<p>** dentro de un **<div>**, dicho **<p>** es hijo del **<div>** y este comparte los atributos del padre, como el fondo, el color de texto, etc.



7\_La cascada es el mecanismo que usa CSS para resolver conflictos entre reglas aplicadas a un mismo elemento, combinando:

**origen + importancia + especificidad + orden**. Así se determina qué estilos se muestran finalmente.

&nbsp;	

