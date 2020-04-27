<?xml version="1.0" encoding="utf-8"?>
 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

  <xsl:template match="/">
    <table border='1'>
      <xsl:for-each select="//NEWSPAPER">
        <tr>
        
        <td><xsl:value-of select="./NAME"/></td>
        <td><xsl:value-of select="./SUBSCRIBERS"/></td>
        <td><xsl:value-of select="./TYPE"/></td>
      
        <td>
        <table>
        <xsl:for-each select="./ARTICLE">
            <tr>
            <td>
            <xsl:value-of select="./ID"/></td>
            <xsl:value-of select="./DESCRIPTION"/></td>
            <xsl:value-of select="./TIME"/></td>  
            </tr>  
        </xsl:for-each>
        </table>
        </td>
          
        </tr>
      </xsl:for-each>
    </table>
  </xsl:template>
 
</xsl:stylesheet>   