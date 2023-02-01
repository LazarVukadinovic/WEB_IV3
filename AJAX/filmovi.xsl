<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Filmska kolekcija</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Naziv</th>
      <th>Zanr</th>
      <th>Godina</th>
    </tr>
    <xsl:for-each select="katalog/film">
    <tr>
      <td><xsl:value-of select="naziv"/></td>
      <td><xsl:value-of select="zanr"/></td>
      <td><xsl:value-of select="godina"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>