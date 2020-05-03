<?xml version="1.0" encoding="utf-8"?>
 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

  <xsl:template match="/">
    <h1 id='head'>Newspaper article database</h1>
    <table border='1'>
 
      <xsl:for-each select="//NEWSPAPER">  
        <tr>
        <td id="head_a"><span style="writing-mode: vertical-lr"><xsl:value-of select="@NAME"/></span></td>    
        <td id="head_b"><span style="writing-mode: vertical-lr"><xsl:value-of select="@TYPE"/></span></td>
        <td id="head_c"><span style="writing-mode: vertical-lr">Subscribers: <xsl:value-of select="@SUBSCRIBERS"/></span></td>
        <td>
        <table>
        <xsl:for-each select="./ARTICLE">           
                <tr>
                <td><span><xsl:value-of select="@DESCRIPTION"/> |
                ID: <xsl:value-of select="@ID"/> |
                Date: <xsl:value-of select="@TIME"/></span></td>
                </tr>  
                <tr>
                <!-- Conditional styling -->
                <td><xsl:choose>
                    <xsl:when test="@DESCRIPTION='News'">
                    <div style="background:rgba(237, 104, 124, 0.3); box-shadow: 0px 0px 10px 2px inset">
                    <xsl:apply-templates/>
                    </div>
                    </xsl:when>
                    <xsl:otherwise>
                    <div style="background:rgba(181, 184, 46, 0.4); box-shadow: 0px 0px 10px 2px inset">
                    <xsl:apply-templates/>
                    </div>
                    </xsl:otherwise>          
                    </xsl:choose></td>
                </tr>            
        </xsl:for-each>
    
        </table>
        </td>
        </tr>
      </xsl:for-each>
    </table>
  </xsl:template>
  <!-- templates for matching the elements      --> 
  <xsl:template match="ARTICLE">
      <xsl:apply-templates/>
  </xsl:template>

  <xsl:template match="HEADING">
      <h3><xsl:value-of select="."/></h3>
  </xsl:template>
               
  <xsl:template match="STORY">
      <div><xsl:value-of select="."/></div>
  </xsl:template>

  <xsl:template match="STORY">
      <xsl:apply-templates/>
  </xsl:template>

  <xsl:template match="TEXT">
      <p><xsl:value-of select="."/></p>
  </xsl:template>

    
 
</xsl:stylesheet>   