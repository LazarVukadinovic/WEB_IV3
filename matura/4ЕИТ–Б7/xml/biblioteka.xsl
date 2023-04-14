<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>

        <head>
            <title>Biblioteka</title>
        </head>

        <body>
            <table border="1">
                <tr>
                    <th>ISBN</th>
                    <th>Naslov</th>
                    <th>Stanje</th>
                    <th>Citano</th>
                </tr>
                <xsl:for-each select="biblioteka/knjiga">
                    <xsl:sort select="citano" order="descending" />
                    <tr>
                        <td>
                            <xsl:value-of select="@ISBN" />
                        </td>
                        <td>
                            <xsl:value-of select="naslov" />
                        </td>
                        <td>
                            <xsl:value-of select="stanje" />
                        </td>
                        <td>
                            <xsl:value-of select="citano" />
                        </td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>

        </html>
    </xsl:template>
</xsl:stylesheet>