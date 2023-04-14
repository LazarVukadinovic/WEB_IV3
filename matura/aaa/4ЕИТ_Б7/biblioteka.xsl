<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<head>
    <title>Biblioteka</title>
</head>
<style>
*{
    margin:0;
    padding:0;
}
  th,td {
  padding: 5px;
}
table{margin:30px;}
  th{text-align:center;}
  h1{
    color:#fff;
    background-color: rgb(7, 73, 255);
    padding: 20px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding-left: 25px;
    overflow: hidden;
    background-color: #054686;
  }
  
li {
    margin-top: 5px;
    margin-bottom: 5px;
float: left;
border:1px solid #fff;
background-color: #2e6ead;
}

li a {
    display: block;
color: white;
text-align: center;
padding: 5px 16px;
text-decoration: none;
}

li a:hover {
background-color: #4da6ff;
color: black;
text-decoration: none;
}
.futer1 {
  left: 0;
  bottom: 0;
  background-color: rgb(105, 105, 105);
  width: 100%;
  text-align: center;
  height: 50px;
  padding: 10px;
  margin-top: 50px;
  position: fixed;
}

</style>
<body>
    <h1>Biblioteka</h1>
    <ul >
            <li><a href="index.php">Početna</a></li>
            <li><a href="biblioteka.xml">Pregled</a></li>
            <li><a href="autor.html">O autoru</a></li>
            <li><a href="uputstvo.html">Uputstvo</a></li>
    </ul>
  <table border="1">
    <tr>
      <th>ISBN</th>
      <th>naslov</th>
      <th>stanje</th>
      <th>čitano</th>
    </tr>
    <xsl:for-each select="biblioteka/knjiga">
    <xsl:sort select="citano" order="descending"/>
    <tr>
      <td><xsl:value-of select="@ISBN"/></td>
      <td><xsl:value-of select="naslov"/></td>
      <td><xsl:value-of select="stanje"/></td>
      <td><xsl:value-of select="citano"/></td>
    </tr>
    </xsl:for-each>
  </table>
  <div class="futer1">
        <p> © Библиотека </p>
    </div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>